<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['procure']))
{

$prodate = $_POST['prodate'];
$proname = $_POST['proname'];
$quantity = $_POST['quantity'];
$vendor = $_POST['vendor'];
$ventact = $_POST['ventact'];
$purpose = $_POST['purpose'];
$proamount = $_POST['proamount'];
$receiver = $_POST['receiver'];

if($_FILES["imagefile"]["error"] === 4){

echo "<script> alert('Image Does Not Exist');</script>";

}
else{
    $fileName = $_FILES["imagefile"]["name"];
    $fileSize = $_FILES["imagefile"]["size"];
    $tmpName = $_FILES["imagefile"]["tmp_name"];

    $validImageExtension = ['JPG', 'jpg', 'jpeg', 'png', 'docx', 'pdf', 'xlsx'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if(!in_array($imageExtension, $validImageExtension)){

    echo "<script> alert('Invalid File Extension');</script>";

    }
    else if($fileSize > 1000000){

    echo "<script> alert('File Size Is Large');</script>";

    }
    else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmpName, 'imgs/'. $newImageName);

    }
}


if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into procurement (prodate, proname, quantity, vendor, ventact, purpose, proamount, receiver, imagefile)
    values('$prodate', '$proname', '$quantity', '$vendor', '$ventact', '$purpose', '$proamount', '$receiver', '$newImageName')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
    header('location:procurement.php');
 
       
        
    }

    else
    {
        echo "<script> alert('Record Entry Failed');</script>";
    }
  
 
}
}


?>
