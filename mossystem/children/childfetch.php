<?php

$connect = new PDO("mysql:host=127.0.0.1:3307;dbname=mossystem", "root", "");

$column = array('childno', 'childname', 'childbirth','agegroup','gender','childaddress','childschool','childclass');

$query = "SELECT * FROM childlist ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE childno LIKE "%'.$_POST['search']['value'].'%" 
 OR childname LIKE "%'.$_POST['search']['value'].'%" 
 OR childbirth LIKE "%'.$_POST['search']['value'].'%"
 OR agegroup LIKE "%'.$_POST['search']['value'].'%" 
 OR gender LIKE "%'.$_POST['search']['value'].'%"
 OR childaddress LIKE "%'.$_POST['search']['value'].'%" 
 OR childschool LIKE "%'.$_POST['search']['value'].'%"
 OR childclass LIKE "%'.$_POST['search']['value'].'%"   
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY childno DESC ';
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
 $sub_array[] = $row['childno'];
 $sub_array[] = $row['childname'];
 $sub_array[] = $row['childbirth'];
 $sub_array[] = $row['agegroup'];
 $sub_array[] = $row['gender'];
 $sub_array[] = $row['childaddress'];
 $sub_array[] = $row['childschool'];
 $sub_array[] = $row['childclass'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM childlist";
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
