<div class="login-panel">
    <div class="container">
        <section class="heading">
            <p>Account Details</span></p>
        </section>
        <form>
            <div class="grid">
                <input type="text" placeholder="Username" name="username" required class="name">
                <select name="rank" class="rank">
                    <option value="nothing" selected="selected">--Account Type--</option>
                    <option value="admin">Admin Account</option>
                    <option value="staff">Staff Account</option>
                </select>
                <input type="text" placeholder="Cin" name="cin" required class="cin" pattern="[0-9]{8}">
                <input type="password" placeholder="Password" name="password" required class="password">
                <input type="submit" value="Request" class="request" name="request">
            </div>
            <label class="signup-label">
                <p>Already have an account ? <span><a href="index.php">Login</a></span></p>
            </label>
        </form>
    </div>
</div>