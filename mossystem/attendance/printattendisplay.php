<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM attendance ORDER BY atdate DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['atdate'];?></td>
        <td><?php echo $row['atmonth'];?></td>
        <td><?php echo $row['memtotal'];?></td>
        <td><?php echo $row['males'];?></td>
        <td><?php echo $row['females'];?></td>
        <td><?php echo $row['vistotal'];?></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
