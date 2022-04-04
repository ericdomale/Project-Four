<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('atmonth','atdate', 'shepnames','assistnames');

$query = "SELECT * FROM shepherdsattendance";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE atmonth LIKE "%'.$_POST['search']['value'].'%"  
 OR atdate LIKE "%'.$_POST['search']['value'].'%"
 OR shepnames LIKE "%'.$_POST['search']['value'].'%"
 OR assistnames LIKE "%'.$_POST['search']['value'].'%"    
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
 $sub_array[] = $row['atmonth'];
 $sub_array[] = $row['atdate'];
 $sub_array[] = $row['shepnames'];
 $sub_array[] = $row['assistnames'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM shepherdsattendance";
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
