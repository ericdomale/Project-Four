<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('revtitle','pubstatus','revdate','isbn', 'quantity', 'editors','pubhouse');

$query = "SELECT * FROM revbooks ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE revtitle LIKE "%'.$_POST['search']['value'].'%" 
 OR pubstatus LIKE "%'.$_POST['search']['value'].'%" 
 OR revdate LIKE "%'.$_POST['search']['value'].'%"
 OR isbn LIKE "%'.$_POST['search']['value'].'%" 
 OR quantity LIKE "%'.$_POST['search']['value'].'%" 
 OR editors LIKE "%'.$_POST['search']['value'].'%" 
 OR pubhouse LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY revid DESC ';
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
 $sub_array[] = $row['revtitle'];
 $sub_array[] = $row['pubstatus'];
 $sub_array[] = $row['revdate'];
 $sub_array[] = $row['isbn'];
 $sub_array[] = $row['quantity'];
 $sub_array[] = $row['editors'];
 $sub_array[] = $row['pubhouse'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM revbooks";
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
