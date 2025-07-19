<head>
  <title>Mini Game</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="jumbotron text-center"
    style="background-image:url('https://static.vecteezy.com/system/resources/previews/000/691/497/original/rock-paper-scissors-neon-icons-vector.jpg');color:white;">
    <h1>Stone | Paper | Scissors</h1>
    <p>Play the game with your Computer</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form method="post">
          <label for="">Choose Your Weapon</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="game" value="R" id="rock">
            <label class="form-check-label" for="rock">
              <img src="rock_image_url.jpg" alt="Rock">
            </label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="game" value="P" id="paper">
            <label class="form-check-label" for="paper">
              <img src="paper_image_url.jpg" alt="Paper">
            </label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="game" value="S" id="scissors">
            <label class="form-check-label" for="scissors">
              <img src="scissors_image_url.jpg" alt="Scissors">
            </label>
          </div>

          <input class="btn btn-success" type="submit" name="sb" value="To Beat">
        </form>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST['sb']) && $_POST['game'] != '0') {

    function sortgame($comp, $you)
    {
      //Draw Game
      if ($comp == $you) {
        return 0;
      }

      //Cases
      if ($you == 'R' && $comp == 'P') {
        return 1;
      } elseif ($you == 'P' && $comp == 'R') {
        return -1;
      }

      if ($you == 'R' && $comp == 'S') {
        return 1;
      } elseif ($you == 'S' && $comp == 'R') {
        return -1;
      }

      if ($you == 'P' && $comp == 'S') {
        return -1;
      } elseif ($you == 'S' && $comp == 'P') {
        return 1;
      }

    }

    $str = 'PRS';
    $shuffled = str_shuffle($str);

    $result = sortgame(substr($shuffled, '0', '1'), $_POST['game']);

    $winner = '';

    if ($result == 0) {
      $winner = "You Choose " . $_POST['game'] . " and Computer Choose " . substr($shuffled, '0', '1') . " Game Draw!";
      ?>
      <audio controls autoplay="true" style="display:none;">
        <source src="mixkit-video-game-bomb-alert-2803.wav" type="audio/ogg">
        <source src="mixkit-video-game-bomb-alert-2803.wav" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <?php
    } elseif ($result == 1) {
      $winner = "You Choose " . $_POST['game'] . " and Computer Choose " . substr($shuffled, '0', '1') . " You Won!";
      ?>
      <audio controls autoplay="true" style="display:none;">
        <source src="mixkit-ending-show-audience-clapping-478.wav" type="audio/ogg">
        <source src="mixkit-ending-show-audience-clapping-478.wav" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <script>
        var video = document.querySelector('video');
        var playButton = document.querySelector('.btn-success');

        // Disable the play button
        playButton.disabled = true;

        // Add an event listener to the video to enable the play button when it ends
        video.addEventListener('ended', function () {
          playButton.disabled = false;
        });
      </script>
      <?php
    } else {
      $winner = "You Choose " . $_POST['game'] . " and Computer Choose " . substr($shuffled, '0', '1') . " Computer Won!";
      ?>
      <center>
        <video width="320" height="240" controls autoplay>
          <source src="av.mp4" type="video/mp4">
          Sorry, your browser doesn't support the video element.
        </video>
      </center>
      <audio controls autoplay="true" style="display:none;">
        <source src="mixkit-player-losing-or-failing-2042.wav" type="audio/ogg">
        <source src="mixkit-player-losing-or-failing-2042.wav" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <script>
        var video = document.querySelector('video');
        var playButton = document.querySelector('.btn-success');

        // Disable the play button
        playButton.disabled = true;

        // Add an event listener to the video to enable the play button when it ends
        video.addEventListener('ended', function () {
          playButton.disabled = false;
        });
      </script>
      <?php
    }

    echo "<center><strong class='alert alert-success'>" . $winner . "</strong></center><br/><br><br>";
  } else {
    echo "<center><strong class='alert alert-success'>Please Choose Your Weapon....</strong></center>";
  }
  ?>
</body>

