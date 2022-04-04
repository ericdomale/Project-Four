<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM shepschool ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['erlid'];?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['erldate'];?></td>
        <td><?php echo $row['duration'];?></td>
        <td><?php echo $row['startdate'];?></td>
        <td><?php echo $row['enddate'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><?php echo $row['cstatus'];?></td>
        <td><?php echo $row['maddress'];?></td>
        <td><a href="shepherds.edit.php?erlid=<?php echo $row['erlid'];?>" class="edit" id="edit">EDIT</a></td>
        <td><a href="shepherds.delete.php?erlid=<?php echo $row['erlid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   