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

        <div class="testa">
            <div class="form-box" id="form-box">
              <div class="button-box">
                <div id="reg-btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">
                  Log in
                </button>
                <button type="button" class="toggle-btn" onclick="register()">
                  Register
                </button>
              </div>
    
              <form class="input-group" id="login" action="login.php" method="POST" >
                <input type="email" name="email" class="input-field" placeholder="Email Address" required />
                <input type="password" name="pass" class="input-field" id="pass" placeholder="Password" required />
                <span class="material-icons selectDisable" onClick="passwordVisible()" id="visible">
                  visibility
                </span>
                <span class="material-icons selectDisable" onClick="passwordVisible()" id="visible_off">
                  visibility_off</span>
                <input type="checkbox" class="check-box" /><span>Remember Password</span>
                <button type="submit" name="login" class="submit-btn">Login</button>
              </form>
    






              <form class="input-group" id="register" name="registerForm"  action="signup.php" method="POST" onsubmit="return validateForm()">
                <input type="text" name="firstname" class="input-field" placeholder="First Name *" required />
                <input type="text" name="lastname" class="input-field" placeholder="Last Name *" required />
                <input type="email" name="email" class="input-field" placeholder="Email Address *" id="email" oninput="mailCheck();" required />
                <p id="text1"></p>
                <input type="password" name="pass" class="input-field" placeholder="Password *" id="password" oninput="checkForm();passwordCheck();passwordCheck2()" required />
                <p id="text2"></p>
                <input type="password" name="retype" class="input-field" id="retype" oninput="checkForm();passwordCheck2()" placeholder="Retype Password *" required />
                <p id="text3"></p>
                <input type="text" name="city" class="input-field" placeholder="City *" required />
                <input type="text" name="street" class="input-field" placeholder="Address *" required />
                <input type="text" name="postalCode" class="input-field" placeholder="Postal Code *" required />
                <input type="text" name="phone" class="input-field" placeholder="Mobile Phone *" required />
                <input type="checkbox" class="check-box" required /><span>I agree to the terms & conditions</span>
                <button type="submit" name="register" class="submit-btn" id="registerBtn">Register</button>
              </form>
            </div>
        </div>
      </div>

      <?php
	include("footer.html"); 
	?>
</body>

<script type="text/javascript" src="js/login-register.js"></script>
<script type="text/javascript" src="js/script.js"></script>


</html>