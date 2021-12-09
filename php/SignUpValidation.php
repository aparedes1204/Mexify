<?php
    if($_SERVER['REQUEST_METHOD']=="POST") {
        
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        if ($email === "" || $password === "") {
            echo ("Bete datu guztiak");
            die;
        }

        if (!filter_var($email,
        FILTER_VALIDATE_REGEXP, 
        array('options' => array('regexp' => '/^[a-zA-Z]+([0-9]{3}@ikasle\.ehu|(\.[a-zA-Z]+){0,1}[a-zA-Z]+@ehu)\.(eus|es)$/')) )
        ) {
          echo('Eposta okerra. EHUko ikasle edo irakasle batena izan behar da');
          die;
        }

        if (!filter_var($password,
        FILTER_VALIDATE_REGEXP, 
        array('options' => array('regexp' => '/^(\S){8,}$/')) )
        ) {
          echo('Pasahitzak gutxienez 8 karakterekoa izan behar ditu, hutsunerik gabe');
          die;
        }

        $usersxml = simplexml_load_file('../xml/users.xml');
        $aurkituta = false;
        foreach($usersxml->xpath('//user') as $user){
            if ($user->email == $email) {
                $aurkituta = true;
                break;
            }
        }
        
        if($aurkituta){
            echo "Erabiltzaile dagoeneko erregistratuta dago";
        } else {
            $newuser = $usersxml->addChild('user');
            $newuser -> addChild('name', $name);
            $newuser -> addChild('email', $email);
            $newuser -> addChild('password', $password);
            $usersxml -> asXML('../xml/users.xml');
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['email'] = $email;
            echo "Zuzen erregistratuta";
        }
    }
?>