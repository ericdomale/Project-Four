<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM chprograms ORDER BY chprogid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['chprogdate'];?></td>
        <td><?php echo $row['chprogname'];?></td>
        <td><?php echo number_format($row['chprogrevenue']);?></td>
        <td><?php echo number_format($row['chprogexpend']);?></td>
        <td><?php echo number_format($row['supdef']);?></td>
        <td><a href="chprogedit.php?chprogid=<?php echo $row['chprogid']; ?>" class="edit">EDIT</a></td>
        <td><a href="chprogdelete.php?chprogid=<?php echo $row['chprogid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    