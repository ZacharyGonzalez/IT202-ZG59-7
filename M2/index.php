<?php
// Include any necessary header or session management here
require(__DIR__ . "/partials/nav.php");
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Some Kinda Word Game</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <button id="startButton">Start Game</button>
    <audio id="correctSound" src="correct.mp3"></audio>
    <audio id="lifeloss" src="lifeloss.mp3"></audio>
    <audio id="beats" src="beats.mp3"></audio>
    <audio id="dead" src="dead.mp3"></audio>
    <audio id="nuke" src="nuke.mp3"></audio>
    <audio id="healed" src="heal.mp3"></audio>

    <div class="wallpaper"></div>
    <div id="game-container">
        <div id="leaderboard">
            <div id="lives"></div>
            <div id="player"></div>
            <div id="timer" class="info">Time: <span id="time">0.00</span>s</div>
            <div id="score" class="info">Score: <span id="scoreValue">0</span></div>
            <div id="WPM" class="info">WPM: <span id="WPMValue">0</span></div>
        </div>
        <div id="multiplier-indicator" style="display: none;">Multiplier Active!</div>
        <input type="text" id="textbox" placeholder="Type to shoot" autocomplete="off">
    </div>

    <script src="script.js"></script>

    <script>
        // Assuming you have some game logic that updates the score
        let score = 0;
        let playerLives = 3;
        
        // Add event listener to start the game
        document.getElementById('startButton').addEventListener('click', startGame);

        function startGame() {
            // Simulate game running and score increasing
            score = 100;  // For testing, you can dynamically update this with game events
            endGame();    // Call endGame once the game ends (you can trigger this based on your game logic)
        }

        function endGame() {
            alert(`Game Over! Your score is: ${score}`);
            saveScoreToDatabase(score);  // Call the function to save the score
        }

        // AJAX request to save the score when the game ends
        function saveScoreToDatabase(score) {
            // Using fetch to send a POST request
            fetch('save_score.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    score: score,
                })
            })
            .then(response => response.text()) // Expecting a response from the PHP server
            .then(data => {
                console.log(data);  // Server response (could be success message or error)
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
