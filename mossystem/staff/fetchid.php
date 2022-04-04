<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
if ($conn->connect_error) {
 die("Connection Failed:". $conn->connect_error);
 }

$output = '';
$query = "SELECT * FROM membership WHERE fullname ='".$_POST["MemberNo"]."' ORDER BY id";
$queryrun = mysqli_query($conn,$query);

$output = '<option>--Select One--</option>';

while($row = mysqli_fetch_array($queryrun))
{
    $output .='<option value="'.$row["fullname"].'">'.$row["memberno"].'</option>';
}

echo $output;


?>