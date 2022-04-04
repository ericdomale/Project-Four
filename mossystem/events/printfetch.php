<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('eventdate', 'eventname', 'eventvenue','eventkind','eventype','dresscode','eventcolours');

$query = "SELECT * FROM events ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE eventdate LIKE "%'.$_POST['search']['value'].'%" 
 OR eventname LIKE "%'.$_POST['search']['value'].'%" 
 OR eventvenue LIKE "%'.$_POST['search']['value'].'%"
 OR eventkind LIKE "%'.$_POST['search']['value'].'%" 
 OR eventype LIKE "%'.$_POST['search']['value'].'%"
 OR dresscode LIKE "%'.$_POST['search']['value'].'%" 
 OR eventcolours LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY eventid DESC ';
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
 $sub_array[] = $row['eventdate'];
 $sub_array[] = $row['eventname'];
 $sub_array[] = $row['eventvenue'];
 $sub_array[] = $row['eventkind'];
 $sub_array[] = $row['eventype'];
 $sub_array[] = $row['dresscode'];
 $sub_array[] = $row['eventcolours'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM events";
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
