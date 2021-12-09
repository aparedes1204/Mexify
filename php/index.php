<!DOCTYPE html>
<html>
<head>
    <script src='../js/jquery-3.4.1.min.js'></script>
    <script type='text/javascript' src='../js/ShowComments.js'></script>
    <script type='text/javascript' src='../js/PlaySong.js'></script>
    <script type='text/javascript' src='../js/AddReview.js'></script>
    <script type='text/javascript' src='../js/GoBack.js'></script>
    <script type='text/javascript' src='../js/LogIn.js'></script>
    <script type='text/javascript' src='../js/LogOut.js'></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@5.3.2/dist/amplitude.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/estiloa.css">

    <title>Welcome to Mexify</title>
</head>
<body class='bg-dark'>
    <?php
        include "Navbar.php";
    ?>
    <div id="content" style='width: 65%; margin: 0 auto; margin-bottom: 200px; margin-top: 100px;'>
        <div id="songs">
            <?php
                if(isset($_SESSION['email'])){
                    echo "<h1 class= 'text-white mt-4 mb-4'align ='center'>Kaixo, ".$_SESSION['email']."</h1>";
                }
                $songxml = simplexml_load_file('../xml/songs.xml');
                foreach($songxml->xpath('//song') as $song){
                    echo "
                    <div id='".$song['id']."'>
                        <div class='card shadow-sm p-4 mb-2 bg-white'>
                            <div class='row no-gutters'>
                                <div class='col-auto' id='playcontainer' onclick='playSong(".$song['id'].")' style='width: 100px; height: 100px;'>
                                    <img class='card-img' id='image' src='".$song->cover."' alt='Suresh Dasari Card'>
                                    <img class='play' src='../images/play.png'>
                                </div>
                                <div class='col-sm-5'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>".$song->title."</h5>
                                        <p class='card-text'>".$song->artist."</p>
                                    </div>
                                </div>    
                                <div class='col align-self-center d-flex justify-content-center'>
                                    <button type='button' id='showComments' class='botoiZuria' name='".$song['id']."'>Informazio gehiago ikusi</button>
                                </div>  
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>
        </div> 
    </div>
</body>
<?php
    include "Player.php";
?>
</html>
