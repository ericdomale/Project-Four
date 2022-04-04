<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['annid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $annid = $_POST['annid'];
 
$sql = "UPDATE announcement SET $column = :value WHERE annid = :annid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('annid',$annid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>
