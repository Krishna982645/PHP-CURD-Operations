<html>
    <head>
        <title>Disply</title>
        <style>
            body{
                background:  rgb(136, 136, 134);
            }
            table{
                background-color: white;
            }
            .update{
                background-color: yellow;
                font: white ;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 25px;
                width: 80px;
                font-weight: bold;
                cursor: pointer;
            }
            #delete{
                background-color: aqua;
               

            }
        </style>

    </head>
</html>
<?php

include("connection.php");
error_reporting(0);

 $query = "SELECT * FROM FORM";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);

 if($total !=0 ){
    
    ?>
    <h2 align="center" ><mark>Displaying All Records</mark></h2>
    <center><table border="1" cellspacing="7">
       <tr> 
       <th width="5%">ID</th>
       <th width="8%">First Name</th>
       <th width="8%"10>Last Name</th>
       <th width="10%">Gender</th>
       <th width="20%">Email</th>
       <th width="10%">Phone</th>
       <th width="24%">Address</th>
       <th width="15%">Operations</th>
        </tr>
<?php
   while($result = mysqli_fetch_assoc($data)){
    echo "<tr> 
            <td>".$result['id']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['lname']."</td>
            <td> ".$result['gender']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td> ".$result['address']."</td>
            <td> <a href='update_design.php?id=$result[id]&fn=$result[fname] & ln=$result[lname]& gen=$result[gender]& &em=$result[email]&ph=$result[phone]&add=$result[address]'
            ><input type ='submit' value='Update' class = 'update'</a>
             <a href='delete.php?id=$result[id]&fn=$result[fname] & ln=$result[lname]& gen=$result[gender]& &em=$result[email]&ph=$result[phone]&add=$result[address]'
            ><input type ='submit' value='Delete' class = 'update' id = 'delete' onclick='return checkdelete()' </a></td>
       
           
            </tr>";
   }

 }else{
    echo "No records found";
 }
?> </table></center>
 
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this record ? ');
    }
</script>
