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
        <div class="login-panel">
            <div class="container">
                <section class="heading">
                    <p>Account Details</span></p>
                </section>
                <form>
                    <div class="grid">
                        <input type="text" placeholder="Name" name="name" required class="name" pattern="[a-z]*">
                        <input type="text" placeholder="Last Name" name="lastName" required class="lastname" pattern="[a-z]*">
                        <input type="text" placeholder="Cin" name="cin" required class="cin" pattern="[0-9]{8}">
                        <input type="password" placeholder="Password" name="password" required class="password">
                        <input type="submit" value="Request" class="request">
                    </div>
                    <label class="signup-label">
                        <p>Already have an account ? <span><a href="index.php">Login</a></span></p>
                    </label>
                </form>
            </div>
        </div>
        <!-- end of master container -->
    </div>
</body>
</html>