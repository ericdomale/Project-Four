<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM opheavens ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['entrydate'];?></td>
        <td><?php echo $row['members'];?></td>
        <td><?php echo $row['preacher'];?></td>
        <td><?php echo $row['message'];?></td>
        <td><?php echo 'GHS '.number_format($row['ofamount']);?></td>
        <td><?php echo $row['choristers'];?></td>
        <td><?php echo $row['connumber'];?></td>
        <td><a href="opheavens.edit.php?id=<?php echo $row['id']; ?>" class="edit">EDIT</a></td>
        <td><a href="opheavens.view.php?id=<?php echo $row['id']; ?>" class="view">VIEW</a></td>
        <td><a href="opheavens.delete.php?id=<?php echo $row['id']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    