<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['cid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $cid = $_POST['cid'];
 
$sql = "UPDATE certificates SET $column = :value WHERE cid = :cid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('cid',$cid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>
