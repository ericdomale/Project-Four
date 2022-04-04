<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array( 'expdate', 'expmonth','expname', 'expgory','paytm','expamount');

$query = "SELECT * FROM expenses ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE expdate LIKE "%'.$_POST['search']['value'].'%" 
 OR expmonth LIKE "%'.$_POST['search']['value'].'%" 
 OR expname LIKE "%'.$_POST['search']['value'].'%"
 OR expgory LIKE "%'.$_POST['search']['value'].'%" 
 OR paytm LIKE "%'.$_POST['search']['value'].'%" 
 OR expamount LIKE "%'.$_POST['search']['value'].'%"   
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY expid DESC ';
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
 $sub_array[] = $row['expdate'];
 $sub_array[] = $row['expmonth'];
 $sub_array[] = $row['expname'];
 $sub_array[] = $row['expgory'];
 $sub_array[] = $row['paytm'];
 $sub_array[] = 'GHS '.number_format($row['expamount']);
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM expenses";
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
