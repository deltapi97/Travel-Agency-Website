<?php
include("connect.php");

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $postalCode = $_POST["postalCode"];
  
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
     

    if($conn){
		$sql= "SELECT * FROM travelagency WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result)>0){
			echo "<script>alert('This email already exists, please try again.');window.location.href = 'login-register.php';</script>";
            die();
		}
	} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
    

   $sql = "INSERT INTO travelagency (fname, lname, email, pass, street, city, phone, postalCode) VALUES ('$fname', '$lname', '$email', '$hashed_pass', '$street', '$city', '$phone', '$postalCode')";
   
   if ($conn->query($sql) === TRUE){
    header("Location: login-register.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>