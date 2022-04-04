<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM childlist ORDER BY childno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td contenteditable="true"><?php echo $row['childno'];?></td>
        <td contenteditable="true"><?php echo $row['childname'];?></td>
        <td contenteditable="true"><?php echo $row['childbirth'];?></td>
        <td contenteditable="true"><?php echo $row['gender'];?></td>
        <td contenteditable="true"><?php echo $row['agegroup'];?></td>
        <td><a href="childedit.php?childno=<?php echo $row['childno']; ?>" class="edit">EDIT</a></td>
        <td><a href="profile/profile.php?childno=<?php echo $row['childno']; ?>" class="view">VIEW</a></td>
        <td><a href="childelete.php?childno=<?php echo $row['childno']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    