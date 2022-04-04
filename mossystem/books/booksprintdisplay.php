<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM books ORDER BY bkid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['bktitle'];?></td>
        <td><?php echo $row['pubstatus'];?></td>
        <td><?php echo $row['bkdate'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['bktotal'];?></td>
        <td><?php echo $row['isbn'];?></td>
        <td><?php echo $row['pubcost'];?></td>
        <td><?php echo $row['retamount'];?></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
