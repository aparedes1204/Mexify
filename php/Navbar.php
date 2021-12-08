<div id="navbar">
  <nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="#">Mexify</a>
    <span class="navbar-text">
      <?php
        if(!isset($_SESSION)){
          session_start();
        }

        if(isset($_SESSION['email'])){
          echo "<button type='button' id='logout' class='botoiUrdin'>Log Out</button>";
        } else {
          echo "<button type='button' id='loginform' class='botoiUrdin' onclick='location.href  = `LogIn.php`'>Log In</button>
          <button type='button' id='lsignupform' class='botoiUrdin' onclick='location.href  = `SignUp.php`'>Sign Up</button>";
      }
      ?>
    
    </span>
  </nav>
</div>