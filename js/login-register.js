var a = document.getElementById("login");
var b = document.getElementById("register");
var c = document.getElementById("reg-btn");
var p = document.getElementById("form-box");
var w = document.getElementById("header");
var l = 800;

// Switch animation between Login and Registration
function register() {
  a.style.left = "-400px";
  b.style.left = "140px";
  c.style.left = "110px";

  setTimeout(() => {
    window.scrollTo({
      top: 200,

      behavior: "smooth",
    });
    p.style.height = "800px";
    w.style.height = "180vh";
  }, 50);
}

function login() {
  a.style.left = "140px";
  b.style.left = "640px";
  c.style.left = "0";

  window.scrollTo({
    top: -150,

    behavior: "smooth",
  });

  setTimeout(() => {
    p.style.height = "450px";
    w.style.height = "110vh";
  }, 200);
}


function mailCheck() {
  var email = document.getElementById("email").value;
  var text = document.getElementById("text1");
  var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if (email.match(pattern)) {
    text.innerHTML = "Your Email Address is valid.";
    text.style.color = "#00ff00";
    p.style.height = l + 20 + "px";
  } else {
    text.innerHTML = "Enter a valid Email Address";
    text.style.color = "#ff0000";
    p.style.height = l + 20 + "px";
  }

  if (email == "") {
    text.innerHTML = "";
    text.style.color = "#00ff00";
    p.style.height = l + "px";
  }
 
}

function passwordVisible() {
  var x = document.getElementById("pass");
  var y = document.getElementById("visible");
  var z = document.getElementById("visible_off");

  if (x.type == "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}

function passwordCheck() {
  var pass = document.getElementById("password").value;
  var text = document.getElementById("text2");
  var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/

  if (pass.match(pattern)) {
    text.innerHTML = "Password is valid";
    text.style.color = "#00ff00";
    p.style.height = l + 40 + "px";
  } else {
    text.innerHTML =
      "Password must be at least 8 characters long, include at least one lower and one upper case character and a number";
    p.style.height = l + 85 + "px";
    text.style.color = "#ff0000";
  }

  if (pass == "") {
    text.innerHTML = "";
    text.style.color = "#00ff00";
    p.style.height = l + 20 + "px";
  }
}

function passwordCheck2() {
  var pass = document.getElementById("password").value;
  var retype = document.getElementById("retype").value;
  var text = document.getElementById("text3");

  if (retype == pass) {
    text.innerHTML = "Password is matching!";
    text.style.color = "#00ff00";
    p.style.height = l + 50 + "px";
  } else {
    text.innerHTML = "Passwords do not match!";
    text.style.color = "#ff0000";
    p.style.height = l + 50 + "px";
  }

  if (retype == "") {
    text.innerHTML = "";
    p.style.height = l + 40 + "px";
  }
}

function validateForm() {
  var password = document.forms["registerForm"]["pass"].value;
  var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/

  if (!passwordRegex.test(password)) {
    alert("Password must have at least one symbol, one number, one uppercase letter, and a minimum length of 8 characters");
    p.style.height = l + 50 + "px";
    return false;
  } else {
    p.style.height = l + "px";
  }
}

function checkForm() {
  var password = document.forms["registerForm"]["pass"].value;
  var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
  var registerBtn = document.getElementById("registerBtn");
  var retype = document.forms["registerForm"]["retype"].value;

  if (!passwordRegex.test(password) || retype != password) {
    registerBtn.disabled = true;
  } else {
    registerBtn.disabled = false;
  }
}