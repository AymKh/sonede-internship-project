<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💧 S.O.N.E.D.E</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="master-container">
        <section class="side-panel">
            <div class="container">
                <img src="../../img/logo.svg" alt="Logo" width="50">
                <p>
                    <?php session_start(); ?>
                    <span class="user-pseudo"><?php $_SESSION['adminCin'] ?></span>
                    <span class="user-rank">[ <?php $_SESSION['rank'] ?> ]</span>
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
                        
                        <div class="card">
                            <h4>Admin Acounts</h4>
                            <p>12</p>
                        </div>
    
                        <div class="card">
                            <h4>Staff Acounts</h4>
                            <p>07</p>
                        </div>
    
                        <div class="card">
                            <h4>Acounts Requests</h4>
                            <p>23</p>
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