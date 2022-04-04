<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['bkid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $bkid = $_POST['bkid'];
 
$sql = "UPDATE books SET $column = :value WHERE bkid = :bkid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('bkid',$bkid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>
