<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('praydate','prayname','praykind', 'datescheduled', 'prayvenue', 'praycontact');

$query = "SELECT * FROM prayers ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE praydate LIKE "%'.$_POST['search']['value'].'%" 
 OR prayname LIKE "%'.$_POST['search']['value'].'%" 
 OR praykind LIKE "%'.$_POST['search']['value'].'%"
 OR datescheduled LIKE "%'.$_POST['search']['value'].'%" 
 OR prayvenue LIKE "%'.$_POST['search']['value'].'%"
 OR praycontact LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY prayid DESC ';
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
 $sub_array[] = $row['praydate'];
 $sub_array[] = $row['prayname'];
 $sub_array[] = $row['praykind'];
 $sub_array[] = $row['datescheduled'];
 $sub_array[] = $row['prayvenue'];
 $sub_array[] = $row['praycontact'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM prayers";
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
