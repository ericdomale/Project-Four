<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM membership ORDER BY memberno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['memberno'];?></td>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><a href="admemberedit.php?memberno=<?php echo $row['memberno']; ?>" class="edit">EDIT</a></td>
        <td><a href="admemberdelete.php?memberno=<?php echo $row['memberno']; ?>" class="delete">DELETE</a></td>
        <td><a href="../profile/profile.php?memberno=<?php echo $row['memberno']; ?>" class="view">VIEW</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>