<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('chprogdate', 'chprogname','chprogrevenue','chprogexpend','supdef');

$query = "SELECT * FROM chprograms ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE chprogdate LIKE "%'.$_POST['search']['value'].'%" 
 OR chprogname LIKE "%'.$_POST['search']['value'].'%" 
 OR chprogrevenue LIKE "%'.$_POST['search']['value'].'%"
 OR chprogexpend LIKE "%'.$_POST['search']['value'].'%" 
 OR supdef LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY chprogid DESC ';
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
 $sub_array[] = $row['chprogdate'];
 $sub_array[] = $row['chprogname'];
 $sub_array[] = 'GHS '.number_format($row['chprogrevenue']);
 $sub_array[] = 'GHS '.number_format($row['chprogexpend']);
 $sub_array[] = 'GHS '.number_format($row['supdef']);
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM chprograms";
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