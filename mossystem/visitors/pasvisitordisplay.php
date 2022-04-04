<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM visitors ORDER BY vid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     
     function updateValue(element,column,vid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       vid: vid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
    <tr>
        <td contenteditable="true"onBlur="updateValue(this,'visdate','<?php echo  $row['vid']; ?>')"><?php echo $row['visdate'];?></td>
        <td contenteditable="true"onBlur="updateValue(this,'visname','<?php echo  $row['vid']; ?>')"><?php echo $row['visname'];?></td>
        <td contenteditable="true"onBlur="updateValue(this,'service','<?php echo  $row['vid']; ?>')"><?php echo $row['service'];?></td>
        <td contenteditable="true"onBlur="updateValue(this,'vstatus','<?php echo  $row['vid']; ?>')"><?php echo $row['vstatus'];?></td>
        <td contenteditable="true"onBlur="updateValue(this,'chinfo','<?php echo  $row['vid']; ?>')"><?php echo $row['chinfo'];?></td>
        <td><a href="pasvistordelete.php?vid=<?php echo $row['vid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    