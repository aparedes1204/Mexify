<div id="navbar">
  <nav class="navbar fixed-top navbar-light shadow-sm p-3 bg-white">
    <div class="row no-glitters" id='homelink' onclick= "window.location = '#'">
      <div class="col align-self-center d-flex justify-content-center">
        <div class="navbar-band" id="homeicon">
            <a id="home" href="#"></a>
          <span>
          <div class="col align-self-center mt-1">
            <span class="ml-5 h3" id='logoname'>Mexify</span>
          </div>
          </span>
        </div>
      </div>
    </div>

    <span class="navbar-text">
      <?php
        if(!isset($_SESSION)){
          session_start();
        }

        if(isset($_SESSION['email'])){
          echo "<button type='button' id='logout' class='botoiZuria'>Log Out</button>";
        } else {
          echo "<button type='button' id='loginform' class='botoiZuria' onclick='location.href  = `LogIn.php`'>Log In</button>
          <button type='button' id='lsignupform' class='botoiZuria' onclick='location.href  = `SignUp.php`'>Sign Up</button>";
      }
      ?>
    
    </span>
  </nav>
</div>