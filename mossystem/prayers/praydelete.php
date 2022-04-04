<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$prayid = $_GET['prayid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM prayers WHERE prayid = '$prayid'");



header("location: prayers.php");


?>