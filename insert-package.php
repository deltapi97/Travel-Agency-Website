<?php
include 'connect.php';


		$fromDate = $_POST['from-date'];
		$toDate = $_POST['to-date'];
		$fromCity = $_POST['from-city'];
		$toCity = $_POST['to-city'];
		$photoURL = $_POST['photoURL'];
		$price = $_POST['price'];
		$duration = $_POST['duration'];
		$availableSeats = $_POST['available-seats'];

		$sql = "INSERT INTO packages (fromDate, toDate, fromCity, toCity, photoURL, price, availableSeats, duration) VALUES ('$fromDate', '$toDate', '$fromCity', '$toCity', '$photoURL', '$price', '$availableSeats', '$duration')";
		if ($conn->query($sql) === true) {
			echo "<script>alert('Success ;) ');window.location.href = 'travelpackages.php';</script>";
		} else {
            echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
?>