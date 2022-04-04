<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('anndate', 'anntype', 'anninfo');

$query = "SELECT * FROM announcement ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE anndate LIKE "%'.$_POST['search']['value'].'%" 
 OR anntype LIKE "%'.$_POST['search']['value'].'%" 
 OR anninfo LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY anndate DESC ';
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
 $sub_array[] = $row['anndate'];
 $sub_array[] = $row['anntype'];
 $sub_array[] = $row['anninfo'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM announcement";
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
