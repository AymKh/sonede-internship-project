<?php 
// header
include('inc/partials/header.php');


    session_start();

    if ( isset( $_SESSION['username'] ) ){
        // user already logged in, redirect
        header('refresh:1;url=src/admin/controlPanel.php');
    }else{
        // no user is logged in
        include('inc/main-side-panel.php');
        include('inc/request-form.php');
    }


//  footer
include('inc/partials/footer.php');