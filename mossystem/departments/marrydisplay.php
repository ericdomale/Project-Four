<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM marriage ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td contenteditable="true"><?php echo $row['erlid'];?></td>
        <td contenteditable="true"><?php echo $row['fullname'];?></td>
        <td contenteditable="true"><?php echo $row['erldate'];?></td>
        <td contenteditable="true"><?php echo $row['duration'];?></td>
        <td contenteditable="true"><?php echo $row['startdate'];?></td>
        <td contenteditable="true"><?php echo $row['enddate'];?></td>
        <td contenteditable="true"><?php echo $row['contact'];?></td>
        <td contenteditable="true"><?php echo $row['cstatus'];?></td>
        <td contenteditable="true"><?php echo $row['maddress'];?></td>
        <td><a href="marriagedit.php?erlid=<?php echo $row['erlid'];?>" class="edit" id="edit">EDIT</a></td>
        <td><a href="marriagedelete.php?erlid=<?php echo $row['erlid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   