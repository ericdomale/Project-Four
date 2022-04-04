<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM  announcement ORDER BY annid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     function activate(element){

     }

     function updateValue(element,column,annid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       annid: annid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
<tr>
    <td contenteditable="true" onBlur="updateValue(this,'anndate','<?php echo  $row['annid']; ?>')" onClick="activate(this)"><?php echo $row['anndate'];?></td>
    <td contenteditable="true" onBlur="updateValue(this,'anntype','<?php echo  $row['annid']; ?>')" onClick="activate(this)"><?php echo $row['anntype'];?></td>
    <td contenteditable="true" onBlur="updateValue(this,'anninfo','<?php echo  $row['annid']; ?>')" onClick="activate(this)"><?php echo $row['anninfo'];?></td>
    <td><a href="anndelete.php?annid=<?php echo $row['annid']; ?>" class="delete">DELETE</a></td>
</tr>
<?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>