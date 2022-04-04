<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('bkgprogram', 'bkgdate','bkgvenue', 'bkgtime','bkgemail','rsvp','bkgcontact');

$query = "SELECT * FROM bookings ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE bkgprogram LIKE "%'.$_POST['search']['value'].'%" 
 OR bkgdate LIKE "%'.$_POST['search']['value'].'%" 
 OR bkgvenue LIKE "%'.$_POST['search']['value'].'%"
 OR bkgtime LIKE "%'.$_POST['search']['value'].'%"
 OR bkgemail LIKE "%'.$_POST['search']['value'].'%" 
 OR rsvp LIKE "%'.$_POST['search']['value'].'%" 
 OR bkgcontact LIKE "%'.$_POST['search']['value'].'%" 
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
 $sub_array[] = $row['bkgprogram'];
 $sub_array[] = $row['bkgdate'];
 $sub_array[] = $row['bkgvenue'];
 $sub_array[] = $row['bkgtime'];
 $sub_array[] = $row['bkgemail'];
 $sub_array[] = $row['rsvp'];
 $sub_array[] = $row['bkgcontact'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM bookings";
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
