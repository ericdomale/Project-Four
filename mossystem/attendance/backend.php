<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['atid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $atid = $_POST['atid'];
 
$sql = "UPDATE attendance SET $column = :value WHERE atid = :atid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('atid',$atid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>
