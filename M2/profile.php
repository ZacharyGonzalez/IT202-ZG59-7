<?php
require_once(__DIR__ . "/partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>

<?php
if (isset($_POST["save"])) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);

    $params = [":email" => $email, ":username" => $username, ":id" => get_user_id()];
    $db = getDB();
    $stmt = $db->prepare("UPDATE Users set email = :email, username = :username where id = :id");
    try {
        $stmt->execute($params);
    } catch (Exception $e) {
        if ($e->errorInfo[1] === 1062) {
            preg_match("/Users.(\w+)/", $e->errorInfo[2], $matches);
            if (isset($matches[1])) {
            } else {
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }
    
    // Select fresh data from table
    $stmt = $db->prepare("SELECT id, email, username from Users where id = :id LIMIT 1");
    try {
        $stmt->execute([":id" => get_user_id()]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
        }
    } catch (Exception $e) {
        echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
    }

    // Check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        if ($new_password === $confirm_password) {
            $stmt = $db->prepare("SELECT password from Users where id = :id");
            try {
                $stmt->execute([":id" => get_user_id()]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if (isset($result["password"])) {
                    if (password_verify($current_password, $result["password"])) {
                        $query = "UPDATE Users set password = :password where id = :id";
                        $stmt = $db->prepare($query);
                        $stmt->execute([
                            ":id" => get_user_id(),
                            ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                        ]);
                    }
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
            background: #eef2f5;
        }
        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: sticky; /* Ensures it stays at the top */
            top: 0;
            width: 100%;
            z-index: 100; /* Ensures it stays above other content */
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 10px;
            font-size: 1rem;
        }

        nav a:hover {
            background-color: #555;
        }

        .container {
            width: 80%;
            max-width: 900px;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px; 
            margin-left: auto;  
            margin-right: auto; 
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .scores-section h3 {
            text-align: center;
            color: #555;
        }

        .scores-section {
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="email"],
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
            margin-bottom: 10px;
            transition: all 0.3s ease-in-out;
        }

        .form-group input[type="email"]:focus,
        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .table-container {
            margin-top: 30px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f8f9fa;
            color: #333;
        }

        td {
            background-color: #ffffff;
            color: #555;
        }

        .alert {
            padding: 10px;
            color: white;
            background-color: #f39c12;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Profile</h1>

    <?php
    if (isset($flash_message)) {
        echo "<div class='alert'>{$flash_message}</div>";
    }
    ?>

    <div class="scores-section">
        <h3>Your Scores:</h3>
        <?php
        $db = getDB();
        $email = get_user_email();
        $username = get_username();
        $user_id = get_user_id();

        // Query to fetch all scores for a specific user
        $stmt = $db->prepare("SELECT score, timestamp FROM Scores WHERE user_id = :user_id ORDER BY timestamp DESC");
        $stmt->execute([":user_id" => $user_id]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            echo "<div class='table-container'>";
            echo "<table><tr><th>Score</th><th>Timestamp</th></tr>";
            foreach ($results as $result) {
                echo "<tr><td>" . htmlspecialchars($result['score']) . "</td><td>" . htmlspecialchars($result['timestamp']) . "</td></tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo "<p>No scores available for this user.</p>";
        }
        ?>
    </div>

    <form method="POST" onsubmit="return validate(this);">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php se($username); ?>" />
        </div>
        <div class="form-group">
            <label for="cp">Current Password</label>
            <input type="password" name="currentPassword" id="cp" />
        </div>
        <div class="form-group">
            <label for="np">New Password</label>
            <input type="password" name="newPassword" id="np" />
        </div>
        <div class="form-group">
            <label for="conp">Confirm Password</label>
            <input type="password" name="confirmPassword" id="conp" />
        </div>
        <div class="form-group">
            <input type="submit" value="Update Profile" name="save" />
        </div>
    </form>
</div>

<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;

        // Example of using flash via javascript
        if (pw !== con) {
            let flash = document.getElementById("flash");
            let outerDiv = document.createElement("div");
            outerDiv.className = "alert";
            outerDiv.innerText = "Password and Confirm password must match";
            flash.appendChild(outerDiv);
            isValid = false;
        }

        return isValid;
    }
</script>

</body>
</html>
