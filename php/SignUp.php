<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src='../js/jquery-3.4.1.min.js'></script>
    <script type='text/javascript' src='../js/SignUp.js'></script>

    <link rel="stylesheet" type="text/css" href="../css/estiloa.css">
</head>
<body class='bg-dark align-middle'>
    <?php
        include 'Navbar.php';
    ?>
    <script>
        $("#homelink").attr("onclick", "window.location='index.php'")
    </script>
    <div id="signup">
        <div class="container">
            <div id="signup-row" class="row justify-content-center align-items-center" style="margin-top : 25%;">
                <div id="signup-column" class="col-md-6">
                    <div id="signup-box" class="col-md-12 p-3">
                        <form id="sign-up-form" name="sign-up-form" method="post">
                            <h3 class="text-center">Erregistratu</h3>
                            <div class="form-group">
                                <label for="name">Izena:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Eposta:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Pasahitza:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="row h-100">
                                <div class="col-auto">
                                    <input type="button" id="submit" name="submit" class="botoiZuria" value="Sign Up">
                                </div>
                                <div class="col align-self-center">
                                    <p class="p-1" id="signupalert"></p>
                                </div>
                            </div>
                            <div id="register-link" class="text-right">
                                Kontua baduzu, <a href="LogIn.php" class="pd-1">hemen kautotu</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>