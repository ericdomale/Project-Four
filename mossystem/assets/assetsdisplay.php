<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM assets ORDER BY aid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['assetdate'];?></td>
        <td><?php echo $row['assetname'];?></td>
        <td><?php echo $row['assetlocation'];?></td>
        <td><?php echo number_format($row['assetamount']);?></td>
        <td><?php echo $row['assetspecs'];?></td>
        <td><a href="assetedit.php?aid=<?php echo $row['aid']; ?>" class="edit">EDIT</a></td>
        <td><a href="assetdelete.php?aid=<?php echo $row['aid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    