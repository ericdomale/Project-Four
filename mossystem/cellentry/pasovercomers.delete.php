<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$id = $_GET['id'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM overcomersentry WHERE id = '$id'");



header("location: pasovercomers.php");


?>