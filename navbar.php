<!--header--->
<header>
    <a href="index.php" class="logo"><img src="img/travel-logo.png" id="logo-image"></a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <?php
            if (isset($_SESSION['email'])) {
              if ($_SESSION['email'] == 'root@root.com') {
                echo '<li id="loginnav"><a href="admin.php">Admin</a></li>';
              }
            }
        ?>
        <li><a href="index.php">Home</a></li>
        <li><a href="travelpackages.php">Travel Packages</a></li>
        <li><a href="orders.php">My Orders</a></li>
        <?php
				if(isset($_SESSION["email"])){
				echo  '<li id="loginnav"><a href="logout.php">Logout </a></li>';
				} else {
				echo '<li id="loginnav"><a href="login-register.php">Login/Register </a></li>';
				}
		?>
        <li><a href="contact.php">Contact Us</a></li>

    </ul>
</header>