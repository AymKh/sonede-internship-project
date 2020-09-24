<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/icons/water.svg">
    <title>S.O.N.E.D.E - Beja</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="master-container">
        <section class="side-panel">
            <div class="container"> 
                <img src="../../img/logo.svg" alt="Logo" width="50">
                <p>
                    <?php session_start(); ?>
                    <span class="user-pseudo"><?php echo $_SESSION['username'] ?></span>
                    <!-- <span class="user-rank">[]</span> -->
                </p>
                <!-- end of container -->
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Requests</a></li>
                    <li><a href="#">Acounts</a></li>
                    <li><a href="#">Something</a></li>
                </ul>
            </nav>
            <form action="../../scripts/logout.php" id="logout">
                <button class="logout-button">Logout</button>
            </form>
            <!-- end of sidePanel -->
        </section>
        <main>
            <div class="container">
                <div class="stats">
                    <div class="stats-grid">
                        <?php 
                            // db connection
                            include_once "../../inc/connection.inc.php";

                            // admin accounts count
                            $getAdminCount = $db -> query( "SELECT * FROM admin;" );
                            $nbrA = 0;
                            while ($getAdminCount->fetch()) {
                                $nbrA++;
                            }
                            
                            // staff accouunts count
                            $getStaffCount = $db -> query( "SELECT * FROM staff;" );
                            $nbrS = 0;
                            while ($getStaffCount->fetch()) {
                                $nbrS++;
                            }
                        
                            // requests count
                            $getRequestCount = $db -> query( "SELECT * FROM requests;" );
                            $nbrR = 0;
                            while ($getRequestCount->fetch()) {
                                $nbrR++;
                            }
                        
                        ?>
                        <div class="card">
                            <h4>Admin Accounts</h4>
                            <p><?php echo "$nbrA"; ?></p>
                        </div>
    
                        <div class="card">
                            <h4>Staff Acounts</h4>
                            <p><?php echo "$nbrS"; ?></p>
                        </div>
    
                        <div class="card">
                            <h4>Acounts Requests</h4>
                            <p><?php echo "$nbrR"; ?></p>
                        </div>
                        <!-- end of stats-grid -->
                    </div>
                </div>
            </div>
            <!-- end of main content -->
        </main>
    </div>
</body>
</html>