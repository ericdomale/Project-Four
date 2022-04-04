<?php
try{
 $db = new pdo ('mysql:host=127.0.0.1:3307;dbname=mossystem','root','');
}
catch(PDOException $e){
    die($e->getMessage());
}

 if (isset($_POST['revid']))
 {
 $value = $_POST['value'];
 $column = $_POST['column'];
 $revid = $_POST['revid'];
 
$sql = "UPDATE revbooks SET $column = :value WHERE revid = :revid LIMIT 1";
$query = $db->prepare($sql);

$query->bindParam('value',$value);
$query->bindParam('revid',$revid);

if($query->execute()){
    echo "Update Successful";
}else{
    echo "Failed";
}
 }


?>