<!DOCTYPE html>
<html>

<head>
  <title>AmplitudeJS Single Song Example</title>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@5.3.2/dist/amplitude.js"></script>

  <!-- Include font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i" rel="stylesheet">

  <!-- Foundation jQuery and Functions -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script typr="text/javascript" src="js/app.js"></script>

  <!--
            Include UX functions JS

            NOTE: These are for handling things outside of the scope of AmplitudeJS
        -->

  <!-- Include Style Sheet -->
  <link rel="stylesheet" type="text/css" href="../css/app.css" />
</head>

<footer>

  <div id="single-song-player" class="footer">
    <div class="left-container">
      <img data-amplitude-song-info="cover_art_url" class="album-art"/>
      <div class="meta-container">
        <span data-amplitude-song-info="name" class="song-name"></span>
        <div class="song-artist-album">
          <span data-amplitude-song-info="artist"></span>
          <span data-amplitude-song-info="album"></span>
        </div>
      </div>
    </div>
    
    <div class="center-container">
      <progress class="amplitude-song-played-progress" id="song-played-progress"></progress>

      <div class="time-container">
        <span class="current-time">
          <span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds"></span>
        </span>
        <span class="duration">
          <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
        </span>
      </div>

      <div class="control-container">
        <div class="amplitude-play-pause" amplitude-main-play-pause="true" id="play-pause"></div>
      </div>

    </div>
    <div class="right-container">

      <div id="volume-container">
        <div class="volume-controls">
          <div class="amplitude-mute amplitude-not-muted"></div>
          <input type="range" class="amplitude-volume-slider" />
          <div class="ms-range-fix"></div>
        </div>
      </div>
    </div>
      

  </div>
</footer>

<script>
  Amplitude.init({});

  document.getElementById('song-played-progress').addEventListener('click', function (e) {
    var offset = this.getBoundingClientRect();
    var x = e.pageX - offset.left;

    Amplitude.setSongPlayedPercentage((parseFloat(x) / parseFloat(this.offsetWidth)) * 100);
  });

</script>

</html>