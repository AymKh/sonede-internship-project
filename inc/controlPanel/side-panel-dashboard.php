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
            <li><a href="../../src/admin/controlPanel.php">Home</a></li>
            <li><a href="../../src/admin/requests.php">Requests</a></li>
        </ul>
    </nav>
    <form action="../../scripts/logout.php" id="logout">
        <button class="logout-button">Logout</button>
    </form>
    <!-- end of sidePanel -->
</section>