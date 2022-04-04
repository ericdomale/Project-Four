<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('baptname', 'baptdate','baptizer','baptvenue');

$query = "SELECT * FROM baptisms ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE baptname LIKE "%'.$_POST['search']['value'].'%" 
 OR baptdate LIKE "%'.$_POST['search']['value'].'%" 
 OR baptizer LIKE "%'.$_POST['search']['value'].'%"
 OR baptvenue LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY baptid DESC ';
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
 $sub_array[] = $row['baptname'];
 $sub_array[] = $row['baptdate'];
 $sub_array[] = $row['baptizer'];
 $sub_array[] = $row['baptvenue'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM baptisms";
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
