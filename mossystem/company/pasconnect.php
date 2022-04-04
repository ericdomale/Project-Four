<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['companyadd']))
{

$cid = $_POST['cid'];    
$company = $_POST['company'];
$owner = $_POST['owner'];
$contact = $_POST['contact'];
$function = $_POST['function'];
$location = $_POST['location'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into companies ( cid, company, owner, contact, function, location)
    values('$cid','$company', '$owner', '$contact', '$function', '$location')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
 
    header('location:pascompany.php');  
        
    }

    else
    {
        echo "Record Fail";
        header('location:pascompany.php'); 
    }
  
 
}
}


?>
