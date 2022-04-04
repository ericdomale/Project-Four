<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM indietithes ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td contenteditable="true"><?php echo $row['memberno'];?></td>
        <td contenteditable="true"><?php echo $row['fullname'];?></td>
        <td contenteditable="true"><?php echo $row['contact'];?></td>
        <td contenteditable="true"><?php echo $row['titdate'];?></td>
        <td contenteditable="true"><?php echo $row['titmonth'];?></td>
        <td contenteditable="true"><?php echo 'GHS '.number_format($row['titamount']);?></td>
        <td><a href="indietithedit.php?id=<?php echo $row['id']; ?>" class="edit">EDIT</a></td>
        <td><a href="indietithedelete.php?id=<?php echo $row['id']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "";
        }
        $conn-> close();

      
?>   