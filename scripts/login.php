<?php

    if(isset($_POST["login-button"])){

        // db access
        require "../inc/connection.inc.php";

        #getting login
        $cin = $_POST['cin'];
        $password = $_POST['password'];

        #session
        session_start();

        #if login found in db then proceed, otherwise error message
        $searchQuery = " SELECT * FROM admins WHERE username = '$cin' ; ";

        $execute = $db -> query( $searchQuery );

        if ( $data =  $execute ->fetch()){
            #getting the user's name from db
            $adminCin = $data['username'];
            $rank = $data['rank'];
            #storing data into a session for futre use
            $_SESSION['adminCin'] = $adminCin;
            $_SESSION['rank'] = $rank;
            header('refresh:2;url=../src/admin/controlPanel.php');    
        }else{
            echo "Wrong Cin / password";
            header('refresh:2;url=../index.php');
        }
    }





    
?>