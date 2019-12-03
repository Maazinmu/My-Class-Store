<?php

$con = mysqli_connect('localhost','root','');
if(!mysqli_select_db($con,"class_store")){
    echo "Not connected";
}

?>