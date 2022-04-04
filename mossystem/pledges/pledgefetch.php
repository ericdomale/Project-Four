<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('pledger', 'pdgdate', 'pdgmonth','pdgprogram', 'pdgstatus','pdgamount');

$query = "SELECT * FROM pledges ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE pledger LIKE "%'.$_POST['search']['value'].'%" 
 OR pdgdate LIKE "%'.$_POST['search']['value'].'%" 
 OR pdgmonth LIKE "%'.$_POST['search']['value'].'%"
 OR pdgprogram LIKE "%'.$_POST['search']['value'].'%" 
 OR pdgstatus LIKE "%'.$_POST['search']['value'].'%" 
 OR pdgamount LIKE "%'.$_POST['search']['value'].'%"   
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY pdgid DESC ';
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
 $sub_array[] = $row['pledger'];
 $sub_array[] = $row['pdgdate'];
 $sub_array[] = $row['pdgmonth'];
 $sub_array[] = $row['pdgprogram'];
 $sub_array[] = $row['pdgstatus'];
 $sub_array[] = 'GHS '.number_format($row['pdgamount']);
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM pledges";
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
