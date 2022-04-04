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
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     function activate(element){

     }

     function updateValue(element,column,id){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       id: id
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
    <tr>
        <td contenteditable="true" onBlur="updateValue(this,'bkgdate','<?php echo  $row['id']; ?>')" onClick="activate(this)"><?php echo $row['bkgdate'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'bkgprogram','<?php echo  $row['id']; ?>')" onClick="activate(this)"><?php echo $row['bkgprogram'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'bkgvenue','<?php echo  $row['id']; ?>')" onClick="activate(this)"><?php echo $row['bkgvenue'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'bkgtime','<?php echo  $row['id']; ?>')" onClick="activate(this)"><?php echo $row['bkgtime'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'bkgemail','<?php echo  $row['id']; ?>')" onClick="activate(this)"><?php echo $row['bkgemail'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'rsvp','<?php echo  $row['id']; ?>')" onClick="activate(this)"><?php echo $row['rsvp'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'bkgcontact','<?php echo  $row['id']; ?>')" onClick="activate(this)"><?php echo $row['bkgcontact'];?></td>
        <td><a href="pasbookingsdelete.php?id=<?php echo $row['id']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>   