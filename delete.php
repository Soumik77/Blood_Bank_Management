<?php
include "connection.php";
session_start();
$id  = $_GET['id'];
$hostname = "localhost";
$username = "root";
$password = "";
$dbname="mypro_bbms";
$connect = mysqli_connect($hostname,$username,$password,$dbname); 
$sql ="UPDATE `donor_registration` SET `isDelete`= TRUE WHERE id ='$id'";
mysqli_query($connect, $sql);

    header('Location:donor-list.php?id');

?>
