<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $proid = $_GET['proid'];
        $sql = "SELECT * FROM procurement  WHERE proid='$proid' ORDER BY proid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['prodate'];?></td>
        <td><?php echo $row['proname'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['purpose'];?></td>
        <td><?php echo $row['vendor'];?></td>
        <td><?php echo $row['receiver'];?></td>
        <td><?php echo 'GHS '.number_format($row['proamount']);?></td>
        <td><img src="imgs/<?php echo $row['imagefile']; ?>" width="200" title="<?php echo $row['imagefile']; ?>"></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    

