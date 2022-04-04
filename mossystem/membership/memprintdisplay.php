<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM membership ORDER BY memberno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['memberno'];?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['memdate'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><?php echo $row['status'];?></td>
        <td><?php echo $row['paddress'];?></td>
        <td><?php echo $row['chgroup'];?></td>
        <td><?php echo $row['cell'];?></td>
        
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
