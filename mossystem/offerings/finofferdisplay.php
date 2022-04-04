<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM offerings ORDER BY offid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['offmonth'];?></td>
        <td><?php echo $row['offweek'];?></td>
        <td><?php echo $row['offdate'];?></td>
        <td><?php echo $row['offprogram'];?></td>
        <td><?php echo $row['offertype'];?></td>
        <td><?php echo 'GHS '.number_format($row['ofamount']);?></td>
        <td><a href="finofferedit.php?offid=<?php echo $row['offid']; ?>" class="edit">EDIT</a></td>
        <td><a href="finofferdelete.php?offid=<?php echo $row['offid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
