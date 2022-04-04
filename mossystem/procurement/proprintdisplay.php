<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM procurement ORDER BY prodate DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['prodate'];?></td>
        <td><?php echo $row['proname'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['vendor'];?></td>
        <td><?php echo $row['ventact'];?></td>
        <td><?php echo $row['purpose'];?></td>
        <td><?php echo $row['proamount'];?></td>
        <td><?php echo $row['receiver'];?></td>
        
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
