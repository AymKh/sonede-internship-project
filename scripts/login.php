<?php
    #getting login
    $cin = $_POST['cin'];
    $password = $_POST['password'];

    echo "$cin";
    #session
    session_start();

    #db connection
    include '../inc/connection.inc.php';

    #if login found in db then proceed, otherwise error message
    $searchQuery = " SELECT * FROM admins WHERE cin = '$cin' ; ";

    $execute = $db -> query( $searchQuery );

    if ( $data =  $execute ->fetch()){

        #getting the user's name from db
        $adminCin = $data['cin'];
        #storing data into a session for futre use
        $_SESSION['adminCin'] = $adminCin;    
    }else{
        echo "Wrong Cin / password";
        header('refresh:2;url=../index.php');
    }
?>