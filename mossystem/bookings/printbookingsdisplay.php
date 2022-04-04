<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM bookings ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['bkgprogram'];?></td>
        <td><?php echo $row['bkgdate'];?></td>
        <td><?php echo $row['bkgvenue'];?></td>
        <td><?php echo $row['bkgemail'];?></td>
        <td><?php echo $row['rsvp'];?></td>
        <td><?php echo $row['bkgcontact'];?></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
