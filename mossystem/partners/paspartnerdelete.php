<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$partnerno = $_GET['partnerno'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM partners WHERE partnerno = '$partnerno'");



header("location: paspartners.php");


?>