<?php

 $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');
 $output = '';
 $sql = "SELECT * FROM typetable WHERE kindno = '".$_POST["kindno"]."' ORDER BY typeno";
 $result = mysqli_query($conn, $sql);
 $output = '<option>--Select One--</option>';
 while ($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["typename"].'">'.$row["typename"].'</option>';
    }
    echo $output;


?>