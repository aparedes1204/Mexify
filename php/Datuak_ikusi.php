<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
integrity=“…" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/estiloa.css">

<style>


	.kategoria{
		text-decoration: underline;
	}

</style>
</head>

<body>
<?php include '../php/menua.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<div class="edukia">
	<div class="titulua">
		<div class="col-6 offset-4 col-md-6 offset-md-6 "> <br/><h1 style = "color: white">Datuak ikusi</h1></br> </div>
	</div>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-4 text-center"><img src="../images/vinyl-record.png" id="abesti_irudia" class="img-fluid" style="width: 70%" alt=“Diskoaren azala" title=" Diskoaren azala " border="0" /></div>
			<div class="col-md-8 col-lg-8">
				<h2 class="kategoria">Titulua: </h2><h2 id="titulua"></h2>
				<br/>
				<h3 class="kategoria">Artista: </h3><h3  id="artista"></h3>
				<br/>
				<h3 class="kategoria">Albuma: </h3><h3 id="albuma"></h3>
				<br/>
				<button id="buttonIruzkinak" class="botoiUrdin">Iruzkinak ikusi</button>
			</div>
		</div>
	</div>
	</div>

</body>
</html>
