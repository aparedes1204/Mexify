<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src='../js/jquery-3.4.1.min.js'></script>
    <script type='text/javascript' src='../js/LogIn.js'></script>

    <link rel="stylesheet" type="text/css" href="../css/estiloa.css">
</head>
<body class='bg-dark align-middle'>
    <?php
        include 'Navbar.php';
    ?>
    <script>
        $("#home").attr('href', 'index.php')
    </script>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center" style="margin-top : 25%;">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 p-3">
                        <form id="log-in-form" name="log-in-form" method="post">
                            <h3 class="text-center">Kautotu</h3>
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
                                    <input type="button" id="submit" name="submit" class="botoiUrdin" value="Log In">
                                </div>
                                <div class="col align-self-center">
                                    <p class="p-1" id="loginalert"></p>
                                </div>
                            </div>
                            <div id="register-link" class="text-right">
                                Ez baduzu konturik, <a href="SignUp.php" class="pd-1">hemen erregistratu</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
