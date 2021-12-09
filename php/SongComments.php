
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if (!isset($_SESSION)){
            session_start();
        }
        include "AddReview.php";
        $id = $_POST['id'];
        $commentxml = simplexml_load_file('../xml/comments.xml');
        foreach($commentxml->xpath('//song') as $song){
            if ($song['id'] == $id) {
                $comments = $song->comments;
                break;
            }
        }
        $songxml = simplexml_load_file('../xml/songs.xml');
        foreach($songxml->xpath('//song') as $song){
            if ($song['id'] == $id) {
                $songinfo = $song;
                break;
            }
        }

        $curl = curl_init();
        $artisturl=str_replace(" ", "%20", $songinfo->restartist);
        $songurl=str_replace(" ", "%20", $songinfo->resttitle);
        $url = "https://api.lyrics.ovh/v1/$artisturl/$songurl";

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        $response = curl_exec($curl);
        $lyricsarray = json_decode($response);
        $lyrics=preg_replace("/\n\n+/i", "\n\n", $lyricsarray->lyrics);
        $lyrics=str_replace("\n", "<br>", $lyrics);
                echo "
                    <div class= 'container-fluid' style='background-image: linear-gradient(#008CBA, #02a9e0); '>
                        <div class='row'>
                            <div class='col-md-4 col-lg-4 text-center'><img src='".$songinfo->cover."' id='abesti_irudia' class='img-fluid' style='width: 70%' alt='Diskoaren azala' title=' Diskoaren azala ' border='0' /></div>
                            <div class='col-md-8 col-lg-8'>
                                <h2 class='kategoria'>".$songinfo->title."</h2><h2 id='titulua'></h2>
                                <br/>
                                <h3 class='kategoria'>".$songinfo->artist."</h4><h4  id='artista'></h3>
                            </div>
                        </div>
                    </div>
                    <div class='row text-white'>
                        <div class='col'>
                            <h4 class='mt-3'>Letra</h4>
                            <p id='lyrics'>".$lyrics."</p>
                        </div>
                        <div class='col mt-3'>

                    
            ";
            if(isset($_SESSION['email'])){
                echo "
                    <form id='reviewForm' >
                        <h4>Iruzkin berria gehitu</h4>
                        <textarea name='review' id='review' cols='150' rows='7'></textarea>
                        <p><input type='button' class='botoiBeltza float-right mt-2' id='submitReview' value='Gehitu iruzkina' onclick='sendReview(".$id.")'></p>
                    </form>
                ";
            }
        if(!isset($comments)){
            echo"<div id='songcomments'>
                <p> Ez dago iruzkinik abesti honetarako</p>
            </div>";
        } else {
            if(isset($_SESSION['email'])){
                echo "<div class='col mt-5'>
                        <h4>Iruzkinak</h4>";
            } else {
                echo "<div class='col'>
                        <h4>Iruzkinak</h4>";
            }
            foreach($comments->children() as $comment){
                $date = explode("T",$comment->date)[0];
                $author = $comment->author;
                $review = $comment->review;
                echo '<h5>'.$author.'</h5>';
                echo '<h6>'.$date.'</h6>';
                echo '<p>'.$review.'</p>';
                echo "<hr class='bg-white'/>";
            }
               
        }
        echo"
        </div>
                </div>
            </div>
        </div>";

        
        
        
        
        
        



        
     } else {
          header("Location: Layout.php");
    }
?>