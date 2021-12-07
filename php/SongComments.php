
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
        echo "
            <head>
                <script src='../js/jquery-3.4.1.min.js'></script>
                <script type='text/javascript' src='../js/AddReview.js'></script>
                <script type='text/javascript' src='../js/GoBack.js'></script>
            </head>
            <body>
            <div id='songinfo'>
                <img src= '".$songinfo->cover."'>
                <p id='description'>".$songinfo->description."</p>
            </div>";

            if(isset($_SESSION['email'])){
                echo "
                    <form id='reviewForm'>
                        <textarea name='review' id='review' cols='30' rows='10'></textarea>
                        <input type='button' id='submitReview' value='Gehitu iruzkina' onclick='sendReview(".$id.")'>
                    </form>
                ";
            }
        if(!isset($comments)){
            echo"<div id='songcomments'>
                <p> Ez dago iruzkinik abesti honetarako</p>
            </div>";
        } else {
            echo "<div id='songcomments'>";
                foreach($comments->children() as $comment){
                    $date = explode("T",$comment->date)[0];
                    $author = $comment->author;
                    $review = $comment->review;
                    echo '<h3>'.$author.'</h3>';
                    echo '<h5>'.$date.'</h5>';
                    echo '<p>'.$review.'</p>';
                }
        }
        echo"</div>
        </body";

        
        
        
        
        
        



        
     } else {
          header("Location: Layout.php");
    }
?>