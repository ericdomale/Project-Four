<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('cid', 'company', 'fullname','contact', 'titdate', 'titmonth','titamount');

$query = "SELECT * FROM jointithes ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE cid LIKE "%'.$_POST['search']['value'].'%" 
 OR company LIKE "%'.$_POST['search']['value'].'%" 
 OR fullname LIKE "%'.$_POST['search']['value'].'%" 
 OR contact LIKE "%'.$_POST['search']['value'].'%"
 OR titdate LIKE "%'.$_POST['search']['value'].'%" 
 OR titmonth LIKE "%'.$_POST['search']['value'].'%" 
 OR titamount LIKE "%'.$_POST['search']['value'].'%"     
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
 $sub_array[] = $row['cid'];
 $sub_array[] = $row['company'];
 $sub_array[] = $row['fullname'];
 $sub_array[] = $row['contact'];
 $sub_array[] = $row['titdate'];
 $sub_array[] = $row['titmonth'];
 $sub_array[] = 'GHS '.number_format($row['titamount']);
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM jointithes";
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
