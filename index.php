<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💧 S.O.N.E.D.E</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="master-container">
        <?php include('inc/main-side-panel.php') ?>
        <?php include('inc/connection.inc.php') ?>
        <div class="login-panel">
            <div class="container">
                <section class="heading">
                    <p>Login as <span>Admin / Staff</span></p>
                </section>
                <form method="POST" action="scripts/login.php">
                    <div class="flex">
                        <input type="text" placeholder="Cin" name="cin" required class="username" pattern="[0-9]{8}">
                        <input type="password" placeholder="Password" name="password" required>
                        <input type="submit" value="Login" class="submit">
                    </div>
                    <label class="signup-label">
                        <p>Don't have an account ? <span><a href="request.php">Request one</a></span></p>
                    </label>
                </form>
            </div>
        </div>
        <!-- end of master container -->
    </div>
</body>
</html>