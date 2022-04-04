<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM tithes ORDER BY titid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td contenteditable="true"><?php echo $row['titweek'];?></td>
        <td contenteditable="true"><?php echo $row['titdate'];?></td>
        <td contenteditable="true"><?php echo $row['titmonth'];?></td>
        <td contenteditable="true"><?php echo $row['titprogram'];?></td>
        <td contenteditable="true"><?php echo 'GHS '.number_format($row['titamount']);?></td>
        <td><a href="tithedit.php?titid=<?php echo $row['titid'];?>" class="edit" id="edit">EDIT</a></td>
        <td><a href="tithedelete.php?titid=<?php echo $row['titid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   