<?php
    /*
    Kautotzerakoan egin behar diren konprobaketak egiten dituen fitxategia eta erabiltzailea eta pasahitza zuzenak badira saioa (session) hasten duen fitxategia
    */
    if($_SERVER['REQUEST_METHOD']=="POST") {
        
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        if ($email === "" || $password === "") {
            echo ("Bete datu guztiak");
            die;
        }


        $usersxml = simplexml_load_file('../xml/users.xml');
        $aurkituta = false;
        foreach($usersxml->xpath('//user') as $user){
            if ($user->email == $email && $user->password == $password) {
                $aurkituta = true;
                break;
            }
        }
        
        if(!$aurkituta){
            echo "Erabiltzaile edo pasahitza okerrak";
        } else {
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['email'] = $email;
            echo "Zuzen kautotuta";
        }
    }
?>