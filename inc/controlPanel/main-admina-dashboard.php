<main>
    <div class="container">
        <div class="stats">
            <div class="requests-grid">
                <?php
                    // sb connection
                    include_once "../../inc/connection.inc.php";
                    // search query
                    $searchQuery = " SELECT * FROM `admin`; ";
                    $executeSearch = $db->query($searchQuery);
                    while ($data = $executeSearch ->fetch()) {
                ?>
                    
                    <form method="POST" action="../../scripts/accept-decline-accounts.php">
                        <div class="request">
                            <input type="text" name="username" value="<?php echo $data['username']; ?>" class="req-username" readonly>
                            <input type="text" name="rank" value="<?php echo $data['rank']; ?>" class="req-rank" readonly>
                            <input type="text" name="cin" value="<?php echo $data['cin']; ?>" class="req-cin" readonly>
                            <input type="password" name="password" value="<?php echo $data['pwd']; ?>" class="req-password" readonly>
                            <input type="submit" value="Decline" class="account-decline" name="decline-account">
                        </div>
                    </form>
                <?php } ?>
                <!-- end of stats-grid -->
            </div>
        </div>
    </div>
    <!-- end of main content -->
</main>