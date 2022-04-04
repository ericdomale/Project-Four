<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('offmonth','offweek', 'offdate', 'offprogram', 'offertype', 'ofamount');

$query = "SELECT * FROM offerings ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE offmonth LIKE "%'.$_POST['search']['value'].'%" 
 OR offweek LIKE "%'.$_POST['search']['value'].'%" 
 OR offdate LIKE "%'.$_POST['search']['value'].'%" 
 OR offprogram LIKE "%'.$_POST['search']['value'].'%" 
 OR offertype LIKE "%'.$_POST['search']['value'].'%" 
 OR ofamount LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY offid DESC ';
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
 $sub_array[] = $row['offmonth'];
 $sub_array[] = $row['offweek'];
 $sub_array[] = $row['offdate'];
 $sub_array[] = $row['offprogram'];
 $sub_array[] = $row['offertype'];
 $sub_array[] = $row['ofamount'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM offerings";
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
