<?php
include 'connect.php';
$sql = "SELECT * FROM packages";
$result = $conn->query($sql);
$data = array();
$i = 0;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        
    
        $data[$i]=array("pId" => $row['packageid'],"price"=>$row['price'],
        "fromCity"=> $row['fromCity'],"toCity"=>$row['toCity'],"fromDate"=>$row['fromDate'],
        "toDate"=>$row['toDate'],"duration"=>$row['duration'],"photourl"=>$row['photoURL'],
        "availableSeats"=>$row['availableSeats']);
        $i++;
    }
}else { 
    echo "0 results "; }

    $conn->close();

$output= array("msg"=>'sql execc successfull',"packages"=>$data);
echo json_encode($output);
// echo "retrievepackages.php";
?>