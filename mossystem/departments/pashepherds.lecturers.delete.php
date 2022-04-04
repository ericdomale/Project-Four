<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$ltid = $_GET['ltid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM shplecturers WHERE ltid = '$ltid'");

header("location: pashepherds.php");

?>