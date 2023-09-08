<?php
include "connection.php";
$id = $_GET['id'];
$hostname = "localhost";
$username = "root";
$password = "";
$dbname="mypro_bbms";
$connect = mysqli_connect($hostname,$username,$password,$dbname); 
$sql = "UPDATE `donor_registration` SET `isDelete`= FALSE WHERE id ='$id'";
mysqli_query($connect,$sql);

header('location:donor-list.php');

?>