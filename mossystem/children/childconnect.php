<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['childlist']))
{

$childno = $_POST['childno'];
$childname = $_POST['childname'];
$childbirth = $_POST['childbirth'];
$agegroup = $_POST['agegroup'];
$gender = $_POST['gender'];
$childfather = $_POST['childfather'];
$childmother = $_POST['childmother'];
$childaddress = $_POST['childaddress'];
$childschool = $_POST['childschool'];
$childclass = $_POST['childclass'];
$childteacher = $_POST['childteacher'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into childlist (childno, childname, childbirth, agegroup, gender, childfather, childmother, childaddress, childschool, childclass, childteacher)
    values('$childno', '$childname', '$childbirth', '$agegroup', '$gender', '$childfather', '$childmother', '$childaddress', '$childschool', '$childclass', '$childteacher')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
       
        
 
    header('location:childlist.php');
 
       
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
