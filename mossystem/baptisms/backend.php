<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['baptid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $baptid = $_POST['baptid'];
 
$sql = "UPDATE baptisms SET $column = :value WHERE baptid = :baptid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('baptid',$baptid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>