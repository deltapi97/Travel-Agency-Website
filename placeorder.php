<?php
include 'connect.php';
session_start();



    $packageid = (int)$_GET['id'];
    $userid = $_SESSION['uid'];
    $date = date("Y/m/d");

    $sql = "INSERT INTO orders (oDate, orderId, pId, usrId ) VALUES ($date, DEFAULT ,'$packageid','$userid')";
    $sql1 = "UPDATE packages SET availableSeats = availableSeats -1 WHERE packageid = '".$packageid."'";
    $sql2 = "SELECT availableSeats FROM diepafidb1.packages WHERE packageid = '".$packageid."'";

    $result = $conn->query($sql2);
    $row = $result->fetch_assoc();
    if((int)$row['availableSeats'] <= 0 ){
        echo 'Not available at the moment';
        $conn->close();
        header("Location:orders.php");
        die();
    }

    

    if($conn->query($sql)===true && $conn->query($sql1)===true ){
        echo "<script>alert('Congratulations! Safe travels ;) ');window.location.href = 'orders.php';</script>";
    }else{
        echo 'failed execc insert into db';
    }
    