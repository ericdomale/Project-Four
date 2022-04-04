<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['prayid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $prayid = $_POST['prayid'];
 
$sql = "UPDATE prayers SET $column = :value WHERE prayid = :prayid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('prayid',$prayid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>