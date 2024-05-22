<?php
include 'connect.php';
$sql = "SELECT packages.fromCity,packages.toCity,packages.fromDate,packages.toDate,packages.price,packages.photoURL FROM orders,packages WHERE orders.usrId = '". $_SESSION['uid']."' AND orders.pId = packages.packageId";
$result = $conn->query($sql);
$data = array();
$i = 0;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        
    
        $data[$i]=array("fromCity" => $row['fromCity'],"toCity"=>$row['toCity'],
        "fromDate"=> $row['fromDate'],"toDate"=>$row['toDate'],
        "price"=> $row['price'],"photoURL"=>$row['photoURL']);
        $i++;
    }
}else { 
    echo "0 results "; }

    $conn->close();

$output= array("msg"=>'sql execc successfull',"orders"=>$data);
echo json_encode($output);

?>