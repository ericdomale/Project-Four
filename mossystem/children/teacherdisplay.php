<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM teachers ORDER BY teacherno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td contenteditable="true"><?php echo $row['teacherno'];?></td>
        <td contenteditable="true"><?php echo $row['teachername'];?></td>
        <td contenteditable="true"><?php echo $row['gender'];?></td>
        <td contenteditable="true"><?php echo $row['classgroup'];?></td>
        <td contenteditable="true"><?php echo $row['qualify'];?></td>
        <td contenteditable="true"><?php echo $row['work'];?></td>
        <td><a href="booksdelete.php?bkid=<?php echo $row['teacherno']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    