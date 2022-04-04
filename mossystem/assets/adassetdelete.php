<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$aid = $_GET['aid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM assets WHERE aid = '$aid'");



header("location: admasset.php");


?>