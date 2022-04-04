<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('shpid', 'fullname', 'appdate','position','cell','location');

$query = "SELECT * FROM sheplist";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE shpid LIKE "%'.$_POST['search']['value'].'%" 
 OR fullname LIKE "%'.$_POST['search']['value'].'%" 
 OR appdate LIKE "%'.$_POST['search']['value'].'%"
 OR position LIKE "%'.$_POST['search']['value'].'%" 
 OR cell LIKE "%'.$_POST['search']['value'].'%"
 OR location LIKE "%'.$_POST['search']['value'].'%"    
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY shpid DESC ';
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
 $sub_array[] = $row['shpid'];
 $sub_array[] = $row['fullname'];
 $sub_array[] = $row['appdate'];
 $sub_array[] = $row['position'];
 $sub_array[] = $row['cell'];
 $sub_array[] = $row['location'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM sheplist";
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
