<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM sheplist ORDER BY id DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script>
 
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
        <td contenteditable="true" onBlur="updateValue(this,'shpid','<?php echo  $row['id']; ?>')"><?php echo $row['shpid'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'fullname','<?php echo  $row['id']; ?>')"><?php echo $row['fullname'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'position','<?php echo  $row['id']; ?>')"><?php echo $row['position'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'cell','<?php echo  $row['id']; ?>')"><?php echo $row['cell'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'location','<?php echo  $row['id']; ?>')"><?php echo $row['location'];?></td>
        <td><a href="shepdelete.php?id=<?php echo $row['id']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>    