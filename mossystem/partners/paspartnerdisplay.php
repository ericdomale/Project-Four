<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM partners ORDER BY partnerno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['partnerno'];?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><a href="paspartneredit.php?partnerno=<?php echo $row['partnerno']; ?>" class="edit">EDIT</a></td>
        <td><a href="paspartnerdelete.php?partnerno=<?php echo $row['partnerno']; ?>" class="delete">DELETE</a></td>
        <td><a href="profile/profile.php?partnerno=<?php echo $row['partnerno']; ?>" class="view">VIEW</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   