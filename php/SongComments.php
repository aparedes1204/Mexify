
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
        if($lyricsarray->error){
            $lyrics = "Ez dago letrarik";
        } else {
            $lyrics=preg_replace("/\n\n+/i", "\n\n", $lyricsarray->lyrics);
            $lyrics=str_replace("\n", "<br>", $lyrics);
        }
echo "
                        <div class='card shadow-sm p-4 mb-2 bg-white'>
                            <div class='row no-gutters'>
                                <div class='col-auto' id='playcontainer'>
                                    <img class='card-img' id='imagedetails' src='".$song->cover."' alt='Suresh Dasari Card'>
                                </div>
                                <div class='col'>
                                    <div class='card-body'>
                                        <h3 class='card-title'>".$song->title."</h3>
                                        <h5 class='card-text'>".$song->artist."</h5>
                                        <div class='card-text mt-3'>
                                            <h6 class='card-text'>Abestiari buruz</h6>
                                            <p>".$song->description."</p>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class='row text-white'>
                            <div class='col'>
                                <h4 class='mt-3'>Letra</h4>
                                <p id='lyrics'>".$lyrics."</p>
                            </div>
                            <div class='col mt-3'>";

            if(isset($_SESSION['email'])){
                echo "
                    <form id='reviewForm' >
                        <h4>Iruzkin berria gehitu</h4>
                        <textarea name='review' id='review' cols='100' rows='7'></textarea>
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
        </div>";

        
        
        
        
        
        



        
     } else {
          header("Location: Layout.php");
    }
?>