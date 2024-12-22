<?php

include("connection.php");
$id =  $_GET['id'];

$query = "SELECT * FROM FORM where id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                UPDATE STUDENT DETAILS
            </div>

            <div class="form">
                <div class="input_field">
                    <label for="">First Name</label>
                    <input type="text" value="<?php echo  $result['fname']; ?>" class="input" name="fname" required>
                </div>
            </div>

            <div class="form">
                <div class="input_field">
                    <label for="">Last Name</label>
                    <input type="text" value="<?php echo $result['lname']; ?>" class="input" name="lname" required>
                </div>
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">Password</label>
                    <input type="password" value="<?php echo $result['password']; ?>" class="input" name="password" required>
                </div>
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">Confirm Password</label>
                    <input type="password" value="<?php echo $result['cpassword']; ?>" class="input" name="cpassword" required>
                </div>
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">Gender</label>
                    <div class="selection">
                        <select name="gender" id="" required>
                            <option value="">Select</option>

                            <option value="male" <?php if ($result['gender'] == 'male') {
                                                        echo "selected";
                                                    } ?>>Male</option>
                            <option value="female" <?php if ($result['gender'] == 'female') {
                                                        echo "selected";
                                                    } ?>>Female</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">Email Address</label>
                    <input type="text" class="input" value="<?php echo $result['email']; ?>" name="email" required>
                </div>
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">Phone Number</label>
                    <input type="text" value="<?php echo $result['phone']; ?>" class="input" name="phone" required>
                </div>
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">Address</label>
                    <textarea class="text" name="address" id="" cols="30" rows="10" required><?php echo $result['address']; ?>
                </textarea>
                </div>
            </div>
            <div class="form">
                <div class="input_field terms">
                    <label for="" class="check">
                        <input type="checkbox" required>
                        <span class="checkmark" required></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>
                <div class="input_field">
                    <input type="submit" value="Update Details" class="btn" name="register">
                </div>
            </div>
        </form>
    </div>




</body>

</html>

<?php
if ($_POST['register']) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    //  if($fname!="" && $lname!="" && $pwd!="" && $cped!="" && $gender!="" && $email!="" & $phone!="" && $address!=""){
    // $sql = "INSERT INTO FORM (fname, lname, password, cpassword, gender, email, phone , address) VALUES('$fname', '$lname', '$pwd', '$cpwd', '$gender', '$email', '$phone', '$address')";

    $query = "UPDATE FORM set fname ='$fname', lname='$lname', password='$pwd', cpassword ='$cpwd', gender='$gender', email='$email', phone='$phone', address='$address'  WHERE id='$id'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Record Updated')</script>";
?>

        <meta http-equiv="refresh" content="0; url =
        http://localhost/php/display.php " />


<?php
    } else {
        echo "Failed to Update";
    }
}

?>