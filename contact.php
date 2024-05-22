<!DOCTYPE html>
<html lang="en">
      <?php 
include("head.html");
session_start();
?>
    <body>
      <?php 
include("navbar.php")
?>

?>

  <form action="send-email.php" method="POST"   >
    <section class="contact-us">
      <div class="contact-form">
        <h1>Contact Us</h1>
        <div class="txtb">
          <label>Full Name :</label>
          <input type="text" name="name" value="" placeholder="Enter Your Name" required>
        </div>

        <div class="txtb">
          <label>Email :</label>
          <input type="email" name="email" value="" placeholder="Enter Your Email" required>
        </div>


        <div class="txtb">
          <label>Subject :</label>
          <input type="text" name="subject" value="" placeholder="Enter Subject" required>
        </div>

        <div class="txtb">
          <label>Message :</label>
          <textarea name="message" required></textarea>
        </div>
        <input type="submit" value="Send" class="btn" name="submit">
        <!-- <a class="btn">Send</a> -->
      </div>
    </section>
    </form>

    <?php
	include("footer.html"); 
	?>

    <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
