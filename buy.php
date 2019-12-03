<?php

function validate($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

$tyype = $_POST['type'];
$num_pies = $_POST['numP'];
$location = $_POST['location'];
$phone = $_POST['phone'];
$name = $_POST['name'];

$sql = "INSERT INTO items(tyype,num_p,loction,phone,Fname) VALUES ('$tyype','$num_pies','$location','$phone','$name')";
require ('connect.php');
if(mysqli_query($con,$sql)){
    header("Refresh:0, url= order.html");
}else{
    header("Refresh:0, url= index.html");
}

?>