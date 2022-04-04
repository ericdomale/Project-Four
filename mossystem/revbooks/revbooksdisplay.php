<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM revbooks ORDER BY revid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
  <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
 
     function updateValue(element,column,revid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       revid: revid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
    <tr>
        <td contenteditable="true" onBlur="updateValue(this,'revdate','<?php echo  $row['revid']; ?>')"><?php echo $row['revdate'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'revtitle','<?php echo  $row['revid']; ?>')"><?php echo $row['revtitle'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'pubstatus','<?php echo  $row['revid']; ?>')"><?php echo $row['pubstatus'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'isbn','<?php echo  $row['revid']; ?>')"><?php echo $row['isbn'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'quantity','<?php echo  $row['revid']; ?>')"><?php echo $row['quantity'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'editors','<?php echo  $row['revid']; ?>')"><?php echo $row['editors'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'pubhouse','<?php echo  $row['revid']; ?>')"><?php echo $row['pubhouse'];?></td>
        <td><a href="revbooksdelete.php?revid=<?php echo $row['revid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    