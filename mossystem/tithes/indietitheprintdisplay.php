<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM indietithes ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['memberno'];?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><?php echo $row['titdate'];?></td>
        <td><?php echo $row['titmonth'];?></td>
        <td><?php echo $row['titamount'];?></td>
        
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
