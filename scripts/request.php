<?php

    if(isset($_POST["request"])){

        // db access
        include_once "../inc/connection.inc.php";

        #getting information
        $cin = $_POST['cin'];
        $username = $_POST['username'];
        $rank = $_POST['rank'];
        $password = $_POST['password'];

        #making sure entered cin doesn't exist already
        $searchAdmin = " SELECT * FROM admin WHERE cin = '$cin' ; ";
        $searchStaff = " SELECT * FROM staff WHERE cin = '$cin' ; ";
        $searchRequest = " SELECT * FROM requests WHERE cin = '$cin' ; ";
        
        $executeAdminSearch = $db -> query( $searchAdmin );
        $executeStaffSearch = $db -> query( $searchStaff );
        $executeRequestSearch = $db -> query( $searchRequest );

        if ( $executeAdminSearch ->fetch() || $executeStaffSearch ->fetch() || $executeRequestSearch ->fetch()){
            // cin exists
            // redirecting back to Home (request-form) page
            header('refresh:0;url=../request.php?request=failed');
        }else{
            // store in db
            $insertNewRequest = " INSERT INTO requests VALUES ('$cin', '$username', '$password', '$rank'); ";
            $db -> query( $insertNewRequest );
            // redirecting back to Home (request-form) page
            header('refresh:0;url=../request.php?request=success');
        }
    }

?>