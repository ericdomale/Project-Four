<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM childlist WHERE agegroup='6-9yrs' ORDER BY childno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['childno'];?></td>
        <td><?php echo $row['childname'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['agegroup'];?></td>
        <!--<td><a href="booksdelete.php?bkid=<?php echo $row['childno']; ?>" class="delete">DELETE</a></td>-->
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    