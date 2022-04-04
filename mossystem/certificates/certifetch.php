<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array( 'certdate', 'certname','certype', 'certschool','awdate','certduration');

$query = "SELECT * FROM certificates ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE certdate LIKE "%'.$_POST['search']['value'].'%" 
 OR certname LIKE "%'.$_POST['search']['value'].'%" 
 OR certype LIKE "%'.$_POST['search']['value'].'%"
 OR certschool LIKE "%'.$_POST['search']['value'].'%" 
 OR awdate LIKE "%'.$_POST['search']['value'].'%" 
 OR certduration LIKE "%'.$_POST['search']['value'].'%"
 
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
 $sub_array[] = $row['certdate'];
 $sub_array[] = $row['certname'];
 $sub_array[] = $row['certype'];
 $sub_array[] = $row['certschool'];
 $sub_array[] = $row['awdate'];
 $sub_array[] = $row['certduration'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM certificates";
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
