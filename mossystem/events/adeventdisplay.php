<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM events ORDER BY eventid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td contenteditable="true"><?php echo $row['eventdate'];?></td>
        <td contenteditable="true"><?php echo $row['eventname'];?></td>
        <td contenteditable="true"><?php echo $row['eventvenue'];?></td>
        <td contenteditable="true"><?php echo $row['eventkind'];?></td>
        <td contenteditable="true"><?php echo $row['eventype'];?></td>
        <td contenteditable="true"><?php echo $row['dresscode'];?></td>
        <td contenteditable="true"><?php echo $row['eventcolours'];?></td>
        <td><a href="adevent.edit.php?eventid=<?php echo $row['eventid']; ?>" class="edit">EDIT</a></td>
        <td><a href="adeventdelete.php?eventid=<?php echo $row['eventid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   