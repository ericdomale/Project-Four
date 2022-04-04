<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('cid','company','owner','contact', 'function', 'location');

$query = "SELECT * FROM companies ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE cid LIKE "%'.$_POST['search']['value'].'%" 
 OR company LIKE "%'.$_POST['search']['value'].'%" 
 OR owner LIKE "%'.$_POST['search']['value'].'%"
 OR contact LIKE "%'.$_POST['search']['value'].'%" 
 OR function LIKE "%'.$_POST['search']['value'].'%" 
 OR location LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY cid DESC ';
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
 $sub_array[] = $row['cid'];
 $sub_array[] = $row['company'];
 $sub_array[] = $row['owner'];
 $sub_array[] = $row['contact'];
 $sub_array[] = $row['function'];
 $sub_array[] = $row['location'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM companies";
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
