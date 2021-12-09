<?php
    /*
    Post bidez jasotako iruzkina, kantaren id-a, eta sesioko eposta hartuz iruzkinen xml-an childNode berri bat sortzen du.
    */
    if(isset($_POST['review'])){
        $review = $_POST['review'];
        $id = $_POST['id'];
        $author = $_SESSION['email'];
        $date = date("c");
        $commentxml = simplexml_load_file('../xml/comments.xml');
        foreach($commentxml->xpath('//song') as $song){
            if ($song['id'] == $id) {
                $comments = $song->comments;
                break;
            }
        }

        $commentNode = $comments->addChild('comment');
        $commentNode -> addChild('author', $author);
        $commentNode -> addChild('date', $date);
        $commentNode -> addChild('review', $review);

        $commentxml -> asXML('../xml/comments.xml');
    }

?>