<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM prayers ORDER BY prayid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['praydate'];?></td>
        <td><?php echo $row['prayname'];?></td>
        <td><?php echo $row['praykind'];?></td>
        <td><?php echo $row['datescheduled'];?></td>
        <td><?php echo $row['prayvenue'];?></td>
        <td><?php echo $row['praycontact'];?></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
