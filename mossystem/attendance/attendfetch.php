<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('atdate', 'atmonth', 'memtotal', 'males', 'females', 'childtotal','vistotal', 'overtotal');

$query = "SELECT * FROM attendance";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE atdate LIKE "%'.$_POST['search']['value'].'%" 
 OR atmonth LIKE "%'.$_POST['search']['value'].'%" 
 OR memtotal LIKE "%'.$_POST['search']['value'].'%"
 OR males LIKE "%'.$_POST['search']['value'].'%"
 OR females LIKE "%'.$_POST['search']['value'].'%"
 OR childtotal LIKE "%'.$_POST['search']['value'].'%"
 OR vistotal LIKE "%'.$_POST['search']['value'].'%" 
 OR overtotal LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY atdate ASC ';
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
 $sub_array[] = $row['atdate'];
 $sub_array[] = $row['atmonth'];
 $sub_array[] = $row['memtotal'];
 $sub_array[] = $row['males'];
 $sub_array[] = $row['females'];
 $sub_array[] = $row['childtotal'];
 $sub_array[] = $row['vistotal'];
 $sub_array[] = $row['overtotal'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM attendance";
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
