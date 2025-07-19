<!DOCTYPE html>
<html>

<head>
    <title>Guess the Number Game</title>
</head>

<body>
    <h1>Guess the Number Game</h1>

    <p>Guess a number between 1 and 100:</p>
    <input type="text" id="guessInput">
    <input type="submit" value="Submit Guess" id="guessSubmit">

    <p class="message" id="message"></p>
    <button onclick="closeVideoPopup()">Close Video</button>

    <div id="videoPopup" style="display: none;">
        <video id="adVideo" controls>
            <source src="advertisement.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>


    <script>
        // Generate a random number between 1 and 100
        const randomNumber = Math.floor(Math.random() * 10) + 1;

        const guessInput = document.getElementById("guessInput");
        const guessSubmit = document.getElementById("guessSubmit");
        const message = document.getElementById("message");

        let attempts = 0;
        let isGameOver = false;

        guessSubmit.addEventListener("click", checkGuess);

        function checkGuess() {
            if (isGameOver) {
                message.textContent = "Game over. Start a new game.";
                return;
            }

            const userGuess = parseInt(guessInput.value);
            attempts++;

            if (userGuess === randomNumber) {
                message.textContent = `Congratulations! You guessed the number ${randomNumber} in ${attempts} attempts.`;
                gameOver();
                isGameOver = true;
            } else if (userGuess < randomNumber) {
                message.textContent = "Try higher!";
            } else {
                message.textContent = "Try lower!";
            }
        }
    </script>
    <script>
        // Example game-over logic (adjust as needed)
        function gameOver() {
            // Check if the game is over
            if (isGameOver) {
                // Display the advertisement video popup
                var videoPopup = document.getElementById("videoPopup");
                videoPopup.style.display = "block";

                // Play the advertisement video
                var adVideo = document.getElementById("adVideo");
                adVideo.play();
            }
        }
        function closeVideoPopup() {
            var videoPopup = document.getElementById("videoPopup");
            videoPopup.style.display = "none";
        }

    </script>
</body>

</html>