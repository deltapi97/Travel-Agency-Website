<!DOCTYPE html>
<html>
<?php 
include("head.html");
session_start();
?>
<body>
<?php 
include("navbar.php")
?>

<!-- Admin check -->
<?php
        
    if(isset($_SESSION["email"]) and $_SESSION["email"] == "root@root.com"){
        echo "all good";
    }	      
    else {
    echo "<script>alert('You need to log in as an admin.');window.location.href = 'index.php';</script>";
    }

?>

<!-- Admin form -->

<div class="admin"> 
                <p>Admin Control Panel</p>                 
                <form id="admin" action="insert-package.php" method="POST">
                    <label for="from-date">From Date:</label><br />
                    <input type="date" name="from-date" /><br /><br />
          
                    <label for="to-date">To Date:</label><br />
                    <input type="date" name="to-date" /><br /><br />
          
                    <label for="from-city">From City:</label><br />
                    <input type="text" name="from-city" /><br /><br />

					<label for="to-city">To City:</label><br />
                    <input type="text" name="to-city" /><br /><br />
          
                    <label for="photoURL">Photo URL:</label><br />
                    <input type="text" name="photoURL" /><br /><br />
          
                    <label for="price">Price:</label><br />
                    <input type="text" name="price" /><br /><br />
          
                    <label for="duration">Duration: (in days)</label><br />
                    <input type="text" name="duration" /><br /><br />
          
                    <label for="available-seats">Available Seats</label><br />
                    <input type="text" name="available-seats" /><br /><br />
          
                    <input type="submit" class="btn" value="Submit" />
                  </form>
                </div>
            </div>  



	<?php
	include("footer.html"); 
	?>

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/cards.js"></script>


</body>
</html>