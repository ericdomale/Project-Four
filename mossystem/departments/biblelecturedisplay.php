<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM biblelecturers ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td contenteditable="true"><?php echo $row['ltid'];?></td>
        <td contenteditable="true"><?php echo $row['fullname'];?></td>
        <td contenteditable="true"><?php echo $row['appdate'];?></td>
        <td contenteditable="true"><?php echo $row['school'];?></td>
        <td contenteditable="true"><?php echo $row['qualify'];?></td>
        <td contenteditable="true"><?php echo $row['trainings'];?></td>
        <td contenteditable="true"><?php echo $row['lectstatus'];?></td>
        <td><a href="bible.lecturers.edit.php?ltid=<?php echo $row['ltid'];?>" class="edit" id="edit">EDIT</a></td>
        <td><a href="bible.lecturers.delete.php?ltid=<?php echo $row['ltid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   