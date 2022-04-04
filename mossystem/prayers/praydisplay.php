<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM prayers ORDER BY prayid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
  <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     function activate(element){

     }

     function updateValue(element,column,prayid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       prayid: prayid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
    <tr>
        <td contenteditable="true" onBlur="updateValue(this,'praydate','<?php echo  $row['prayid']; ?>')" onClick="activate(this)"><?php echo $row['praydate'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'prayname','<?php echo  $row['prayid']; ?>')" onClick="activate(this)"><?php echo $row['prayname'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'praykind','<?php echo  $row['prayid']; ?>')" onClick="activate(this)"><?php echo $row['praykind'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'datescheduled','<?php echo  $row['prayid']; ?>')" onClick="activate(this)"><?php echo $row['datescheduled'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'prayvenue','<?php echo  $row['prayid']; ?>')" onClick="activate(this)"><?php echo $row['prayvenue'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'praycontact','<?php echo  $row['prayid']; ?>')" onClick="activate(this)"><?php echo $row['praycontact'];?></td>
        <td><a href="praydelete.php?prayid=<?php echo $row['prayid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
