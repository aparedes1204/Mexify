<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src='../js/jquery-3.4.1.min.js'></script>
    <script type='text/javascript' src='../js/LogIn.js'></script>
</head>
<body>
    <div id = "log-in" name = "log-in">
        <h1>Kautotzea</h1>

        <form id = "log-in-form" name = "log-in-form" method = "post">
            <p>Eposta:<input type="text" id="email" name="email"><p>
            <p>Pasahitza:<input type="password" id="password" name="password"><p> 
			<p id='loginalert'></p>
            <input type="button" id="submit" name="submit" value="Log In">
        </form>
    </div>
</body>
</html>
