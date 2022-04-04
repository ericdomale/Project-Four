<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$pdgid = $_GET['pdgid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM pledges WHERE pdgid = '$pdgid'");



header("location: finpledges.php");


?>