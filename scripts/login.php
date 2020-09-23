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
        $searchQuery = " SELECT * FROM user WHERE cin = '$cin' ; ";
        $executeSearch = $db -> query( $searchQuery );

        if ( $data =  $executeSearch ->fetch()){
            // cin exists
            // making sure the password is correct
            if( $data['pwd'] == $password ){

                #getting the user's name, rank
                $username = $data['username'];
                $rank = $data['rank'];

                #storing data into a session for futre use
                $_SESSION['username'] = $username;
                $_SESSION['rank'] = $rank ;
                // redirecting to controlPanel
                header('refresh:0;url=../src/admin/controlPanel.php');
            }else{
                echo "Wrong Cin / password";
                // redirecting back to Home page
                header('refresh:2;url=../index.php');
            }
        }
    }

?>