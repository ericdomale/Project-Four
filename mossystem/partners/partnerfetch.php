<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('partnerno', 'fullname','gender','status','email','contact','partaddress','gpsaddress','work','since');

$query = "SELECT * FROM partners ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE partnerno LIKE "%'.$_POST['search']['value'].'%" 
 OR fullname LIKE "%'.$_POST['search']['value'].'%" 
 OR gender LIKE "%'.$_POST['search']['value'].'%" 
 OR status LIKE "%'.$_POST['search']['value'].'%" 
 OR email LIKE "%'.$_POST['search']['value'].'%" 
 OR contact LIKE "%'.$_POST['search']['value'].'%" 
 OR partaddress LIKE "%'.$_POST['search']['value'].'%" 
 OR gpsaddress LIKE "%'.$_POST['search']['value'].'%" 
 OR work LIKE "%'.$_POST['search']['value'].'%" 
 OR since LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY partnerno DESC ';
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
 $sub_array[] = $row['partnerno'];
 $sub_array[] = $row['fullname'];
 $sub_array[] = $row['gender'];
 $sub_array[] = $row['status'];
 $sub_array[] = $row['email'];
 $sub_array[] = $row['contact'];
 $sub_array[] = $row['partaddress'];
 $sub_array[] = $row['gpsaddress'];
 $sub_array[] = $row['work'];
 $sub_array[] = $row['since'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM partners";
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