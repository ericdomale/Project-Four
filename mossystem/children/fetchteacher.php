<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('teacherno','teachername','teachbirth','gender','classgroup','qualify','work');

$query = "SELECT * FROM teachers ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE teacherno LIKE "%'.$_POST['search']['value'].'%" 
 OR teachername LIKE "%'.$_POST['search']['value'].'%" 
 OR teachbirth LIKE "%'.$_POST['search']['value'].'%"
 OR gender LIKE "%'.$_POST['search']['value'].'%" 
 OR classgroup LIKE "%'.$_POST['search']['value'].'%"
 OR qualify LIKE "%'.$_POST['search']['value'].'%" 
 OR work LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY teacherno DESC ';
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
 $sub_array[] = $row['teacherno'];
 $sub_array[] = $row['teachername'];
 $sub_array[] = $row['teachbirth'];
 $sub_array[] = $row['gender'];
 $sub_array[] = $row['classgroup'];
 $sub_array[] = $row['qualify'];
 $sub_array[] = $row['work'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM teachers";
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
