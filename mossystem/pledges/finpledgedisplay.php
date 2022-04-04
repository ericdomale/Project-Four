<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM pledges ORDER BY pdgid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['pledger'];?></td>
        <td><?php echo $row['pdgdate'];?></td>
        <td><?php echo $row['pdgmonth'];?></td>
        <td><?php echo $row['pdgprogram'];?></td>
        <td><?php echo $row['pdgstatus'];?></td>
        <td><?php echo 'GHS '.number_format($row['pdgamount']);?></td>
        <td><a href="finpledgedit.php?pdgid=<?php echo $row['pdgid']; ?>" class="edit">EDIT</a></td>
        <td><a href="finpledgedelete.php?pdgid=<?php echo $row['pdgid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>  