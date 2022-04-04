<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('memberno', 'fullname', 'gender','memdate','contact','status','paddress','chgroup','cell');

$query = "SELECT * FROM membership ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE memberno LIKE "%'.$_POST['search']['value'].'%" 
 OR fullname LIKE "%'.$_POST['search']['value'].'%" 
 OR gender LIKE "%'.$_POST['search']['value'].'%"
 OR memdate LIKE "%'.$_POST['search']['value'].'%" 
 OR contact LIKE "%'.$_POST['search']['value'].'%"
 OR status LIKE "%'.$_POST['search']['value'].'%" 
 OR paddress LIKE "%'.$_POST['search']['value'].'%"
 OR chgroup LIKE "%'.$_POST['search']['value'].'%" 
 OR cell LIKE "%'.$_POST['search']['value'].'%"   
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY memberno DESC ';
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
 $sub_array[] = $row['memberno'];
 $sub_array[] = $row['fullname'];
 $sub_array[] = $row['gender'];
 $sub_array[] = $row['memdate'];
 $sub_array[] = $row['contact'];
 $sub_array[] = $row['status'];
 $sub_array[] = $row['paddress'];
 $sub_array[] = $row['chgroup'];
 $sub_array[] = $row['cell'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM membership";
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
