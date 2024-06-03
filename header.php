<header class="header">
    <div class="flex">
        <a href="home.php" class="logo">
            <img src="Logo.png" alt="Logo" class="site-logo">
        </a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="view_products.php">Parfum</a>
            <a href="order.php">Autres</a>
            <a href="about.php">A propos de nous</a>
            <a href="contact.php">Contactez-nous</a>
        </nav>
        <div class="icons">
            <i class="bx bx-user" id="user-btn"></i>
            <a href="wishlist.php" class="cart-btn"><i class='bx bx-heart'></i><sup>0</sup></a>
            <a href="cart.php" class="cart-btn"><i class='bx bx-cart-download'></i><sup>0</sup></a>
            <i class='bx bx-list-plus' id="menu-btn" style="font-size: 2rem;"></i>
        </div>
        <div class="user-box">
            <p>Utilisateur : <span><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Invité'; ?></span></p>
            <p>Email : <span><?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'Non fourni'; ?></span></p>
            <a href="login.php" class="btn">Connectez-vous</a>
            <a href="register.php" class="btn">Inscrivez-vous</a>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">Se déconnecter</button>
            </form>
        </div>
    </div>
</header>
