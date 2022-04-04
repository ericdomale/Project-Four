<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM shepherdsattendance ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['atmonth'];?></td>
        <td><?php echo $row['atdate'];?></td>
        <td><?php echo $row['shepherds'];?></td>
        <td><?php echo $row['assistants'];?></td>
        <td><a href="shepherd.attend.edit.php?id=<?php echo $row['id']; ?>" class="edit">EDIT</a></td>
        <td><a href="shepherd.attend.view.php?id=<?php echo $row['id']; ?>" class="view">VIEW</a></td>
        <td><a href="shepherd.attend.delete.php?id=<?php echo $row['id']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    