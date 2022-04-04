<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM books ORDER BY bkid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     function activate(element){

     }

     function updateValue(element,column,bkid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       bkid: bkid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
<tr>
    <td contenteditable="true" onBlur="updateValue(this,'bkdate','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo $row['bkdate'];?></td>
    <td contenteditable="true" onBlur="updateValue(this,'bktitle','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo $row['bktitle'];?></td>
    <td contenteditable="true" onBlur="updateValue(this,'pubstatus','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo $row['pubstatus'];?></td>
    <td contenteditable="true" onBlur="updateValue(this,'isbn','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo $row['isbn'];?></td>
    <td contenteditable="true" onBlur="updateValue(this,'quantity','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo $row['quantity'];?></td>
    <td contenteditable="true" onBlur="updateValue(this,'bktotal','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo number_format($row['bktotal']);?></td>
    <td contenteditable="true" onBlur="updateValue(this,'pubcost','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo 'GHS '.number_format($row['pubcost']);?></td>
    <td contenteditable="true" onBlur="updateValue(this,'retamount','<?php echo  $row['bkid']; ?>')" onClick="activate(this)"><?php echo 'GHS '.number_format($row['retamount']);?></td>
    <td><a href="finbooksdelete.php?bkid=<?php echo $row['bkid']; ?>" class="delete">DELETE</a></td>
</tr>
<?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>