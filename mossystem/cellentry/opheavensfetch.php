<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('entrydate','attended', 'preacher','message', 'ofamount','choristers','connames');

$query = "SELECT * FROM opheavens ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE entrydate LIKE "%'.$_POST['search']['value'].'%"  
 OR attended LIKE "%'.$_POST['search']['value'].'%"  
 OR preacher LIKE "%'.$_POST['search']['value'].'%"
 OR message LIKE "%'.$_POST['search']['value'].'%" 
 OR ofamount LIKE "%'.$_POST['search']['value'].'%" 
 OR choristers LIKE "%'.$_POST['search']['value'].'%"
 OR connames LIKE "%'.$_POST['search']['value'].'%"
  
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
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
 $sub_array[] = $row['entrydate'];
 $sub_array[] = $row['attended'];
 $sub_array[] = $row['preacher'];
 $sub_array[] = $row['message'];
 $sub_array[] = 'GHS '.number_format($row['ofamount']);
 $sub_array[] = $row['connames'];
 $sub_array[] = $row['choristers'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM opheavens";
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
