<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die( "Connection failed" . mysqli_connect_error());
}
else{
    echo "Connected Successfully";
}
$sql="CREATE DATABASE DB10";
if(!$sql){
    echo "Failed";
}
else {
    echo "Success";
}
mysqli_close($conn);
?>