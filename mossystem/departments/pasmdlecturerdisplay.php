<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM mdlecturers ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['ltid'];?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['appdate'];?></td>
        <td><?php echo $row['school'];?></td>
        <td><?php echo $row['qualify'];?></td>
        <td><?php echo $row['trainings'];?></td>
        <td><?php echo $row['lectstatus'];?></td>
        <td><a href="pasmdlecturedit.php?ltid=<?php echo $row['ltid'];?>" class="edit" id="edit">EDIT</a></td>
        <td><a href="pasmdlecturedelete.php?ltid=<?php echo $row['ltid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   