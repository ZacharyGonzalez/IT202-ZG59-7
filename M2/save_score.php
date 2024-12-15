<?php
require_once(__DIR__ . "/partials/nav.php");

// Make sure the user is logged in
if (!is_logged_in()) {
    die("User is not logged in.");
}

// Get the user_id from the session
$user_id = get_user_id(); // Assuming you have this function to fetch the user id

// Check if the score is set and sanitize it
if (isset($_POST['score'])) {
    $score = (int) $_POST['score'];  // Cast score to an integer (sanitize)
    
    // Database connection
    $db = getDB(); // Assuming you have the getDB() function set up to get your PDO connection

    // Prepare the SQL query to insert the score into the Scores table
    $stmt = $db->prepare("INSERT INTO Scores (user_id, score) VALUES (:user_id, :score)");
    $stmt->execute([
        ':user_id' => $user_id,
        ':score' => $score
    ]);

    // Respond with a success message
    echo "Score saved successfully!";
} else {
    echo "No score received.";
}
?>
