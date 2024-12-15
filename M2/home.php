<?php
require(__DIR__ . "/partials/nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Leaderboards</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;  /* Center horizontally */
            justify-content: flex-start;  /* Keep content at the top */
            min-height: 100vh;  /* Full viewport height */
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
            margin-top: 20px; /* Space between navbar and content */
            margin-left: auto;  /* Center horizontally */
            margin-right: auto; /* Center horizontally */
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        h3 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #333;
        }

        .instructions {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .info {
            margin-top: 20px;
            font-size: 1.1rem;
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Home</h1>

    <?php
    // Check if user is logged in
    if (is_logged_in()) {
        echo "Welcome, " . get_user_email() . "<br>";
    } else {
        echo "You're not logged in <br>";
    }
    ?>

    <div class="instructions">
        <p>This page will show you leaderboards of the falling word game: where players type to keep up with the onslaught of words.</p>
    </div>

    <?php
    // Fetch the top 10 highest scores from the database
    $db = getDB(); 

    $stmt = $db->prepare("SELECT Users.username, Scores.score, Scores.timestamp 
                          FROM Scores 
                          JOIN Users ON Scores.user_id = Users.id 
                          ORDER BY Scores.score DESC 
                          LIMIT 10");
    $stmt->execute();
    $top_scores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($top_scores) {
        echo "<h3>Top 10 Scores:</h3>";
        echo "<table>";
        echo "<tr><th>Rank</th><th>Username</th><th>Score</th><th>Timestamp</th></tr>";

        $rank = 1;
        foreach ($top_scores as $score) {
            echo "<tr>";
            echo "<td>" . $rank++ . "</td>";  // Display the rank (1, 2, 3, ...)
            echo "<td>" . htmlspecialchars($score['username']) . "</td>";
            echo "<td>" . htmlspecialchars($score['score']) . "</td>";
            echo "<td>" . htmlspecialchars($score['timestamp']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No scores available.";
    }
    ?>

    <?php 
    // Query to fetch top 10 highest scores for today
    $stmt = $db->prepare("SELECT Users.username, Scores.score, Scores.timestamp 
                          FROM Scores 
                          JOIN Users ON Scores.user_id = Users.id 
                          WHERE DATE(Scores.timestamp) = CURDATE() 
                          ORDER BY Scores.score DESC 
                          LIMIT 10");
    $stmt->execute();
    $top_scores_today = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($top_scores_today) {
        echo "<h3>Top 10 Scores for Today:</h3>";
        echo "<table>";
        echo "<tr><th>Rank</th><th>Username</th><th>Score</th><th>Timestamp</th></tr>";

        $rank = 1;
        foreach ($top_scores_today as $score) {
            echo "<tr>";
            echo "<td>" . $rank++ . "</td>";
            echo "<td>" . htmlspecialchars($score['username']) . "</td>";
            echo "<td>" . htmlspecialchars($score['score']) . "</td>";
            echo "<td>" . htmlspecialchars($score['timestamp']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No scores available for today.";
    }
    ?>

</div>

</body>
</html>
