<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM procurement ORDER BY proid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['prodate'];?></td>
        <td><?php echo $row['proname'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['purpose'];?></td>
        <td><?php echo $row['vendor'];?></td>
        <td><?php echo $row['receiver'];?></td>
        <td><?php echo 'GHS '.number_format($row['proamount']);?></td>
        <td><a href="adprocuredit.php?proid=<?php echo $row['proid']; ?>" class="edit">EDIT</a></td>
        <td><a href="adprocuredelete.php?proid=<?php echo $row['proid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    