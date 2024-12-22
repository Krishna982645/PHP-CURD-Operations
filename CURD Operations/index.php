<?php

include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CURD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>
        </div>
        
        <div class="form">
            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">Password</label>
                <input type="password" class="input" name="password" required>
            </div>
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" class="input" name="cpassword" required>
            </div>
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">Gender</label>
                <div class="selection">
                <select   name="gender" id="" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">Email Address</label>
                <input type="text" class="input" name="email" required>
            </div>
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">Phone Number</label>
                <input type="text" class="input" name="phone" required>
            </div>
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">Address</label>
                <textarea  class="text" name="address" id="" cols="30" rows="10" required></textarea>
            </div>
  </div>       
             <div class="form">
                           <div class="input_field terms">
               <label for="" class="check">
                <input type="checkbox"  required>
                <span class="checkmark" required></span>
               </label>
               <p>Agree to terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
        </form>
    </div>
 

  

</body>

</html>

<?php
   IF($_POST['register']){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   
    //  if($fname!="" && $lname!="" && $pwd!="" && $cped!="" && $gender!="" && $email!="" & $phone!="" && $address!=""){
    $sql = "INSERT INTO FORM (fname, lname, password, cpassword, gender, email, phone , address) VALUES('$fname', '$lname', '$pwd', '$cpwd', '$gender', '$email', '$phone', '$address')";
    $data = mysqli_query($conn, $sql);

     if($data){
        echo "Data Inserted into Database";
     }else{
        echo "Failed";
     }
    }  
    
?>