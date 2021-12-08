<!DOCTYPE html>
<html>

<footer>

<div class="fixed-bottom " id="player" style="visibility: hidden;">
  <div class="card shadow-lg p-4 bg-white" style="width: 100%;">
    <div class="row no-gutters">
      <div class="col">
        <div class="row no-gutters">
          <img data-amplitude-song-info="cover_art_url" class="album-art"/>
          <div class="col">
            <div class='card-body'>
              <h5 class='card-title'><span data-amplitude-song-info="name" class="song-name"></span></h5>
              <p class='card-text'><span data-amplitude-song-info="artist"></span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col align-self-center">
        <div class="row">
          <div class="col align-self-center d-flex justify-content-center">
            <span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds mr-2"></span>
            <progress class="amplitude-song-played-progress mt-1" id="song-played-progress"></progress>
            <span class="amplitude-duration-minutes ml-2"></span>:<span class="amplitude-duration-seconds"></span>
          </div>
        </div>
        <div class="row">
          <div class="col align-self-center d-flex justify-content-center">
            <div class="amplitude-play-pause" amplitude-main-play-pause="true" id="play-pause"></div>
          </div>
        </div>
      </div>
      <div class="col align-self-center">
        <div class="float-right mr-5">
          <input type="range" class="amplitude-volume-slider" />
        </div>
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