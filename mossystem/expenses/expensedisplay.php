<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM expenses ORDER BY expid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['expdate'];?></td>
        <td><?php echo $row['expname'];?></td>
        <td><?php echo $row['expgory'];?></td>
        <td><?php echo $row['paytm'];?></td>
        <td><?php echo 'GHS '.number_format($row['expamount']);?></td>
        <td><a href="expensedit.php?expid=<?php echo $row['expid']; ?>" class="edit">EDIT</a></td>
        <td><a href="expensedelete.php?expid=<?php echo $row['expid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   