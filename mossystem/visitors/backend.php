<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['vid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $vid = $_POST['vid'];
 
$sql = "UPDATE visitors SET $column = :value WHERE vid = :vid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('vid',$vid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>
