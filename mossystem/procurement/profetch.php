<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('prodate', 'proname', 'quantity','vendor','ventact','purpose','proamount','receiver');

$query = "SELECT * FROM procurement ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE prodate LIKE "%'.$_POST['search']['value'].'%" 
 OR proname LIKE "%'.$_POST['search']['value'].'%" 
 OR quantity LIKE "%'.$_POST['search']['value'].'%"
 OR vendor LIKE "%'.$_POST['search']['value'].'%" 
 OR ventact LIKE "%'.$_POST['search']['value'].'%"
 OR purpose LIKE "%'.$_POST['search']['value'].'%" 
 OR proamount LIKE "%'.$_POST['search']['value'].'%"
 OR receiver LIKE "%'.$_POST['search']['value'].'%"    
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY prodate DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['prodate'];
 $sub_array[] = $row['proname'];
 $sub_array[] = $row['quantity'];
 $sub_array[] = $row['vendor'];
 $sub_array[] = $row['ventact'];
 $sub_array[] = $row['purpose'];
 $sub_array[] = 'GHS '.number_format($row['proamount']);
 $sub_array[] = $row['receiver'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM procurement";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>
