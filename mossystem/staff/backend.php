<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['value']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $srid = $_POST['srid'];
 
$sql = "UPDATE staff SET $column = :value WHERE srid = :srid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('srid',$srid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>
