<?php include("connect.php");?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCB_REGISTRATION_FORM</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="Container">
        <img src="tcb.jpg" alt="TCB Logo" class="logo">
        <h1>Registration Form</h1>
    
    <div class="TCB_Container">
        <form action="#" method="POST">

            <div class="TCB_Background"><i class="fa fa-user icon"></i>
                <input type="text" placeholder="First Name" class="name" name="firstname">
                <span>
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Last Name" class="name" name="lastname">
                </span>
            </div>

            <div class="TCB_Background">
                <i class="fa fa-envelope icons"></i>
                <input type="email" placeholder="Email" class="field" id="email" name="email">
            </div>
            <div class="TCB_Background"><i class="fa fa-phone-square icons"></i>
                <input type="number" placeholder="Phone Number" class="field" name="number">

            </div>
           <div class="TCB_Background">
                <i class="fa fa-lock icons" ></i>
                <input type="password" placeholder="Password" class="field" name="password">
            </div>
            <div class="TCB_Background">
                <i class="fa fa-lock icons"></i>
                <input type="password" placeholder="Confirm Password" class="field" name="cpassword">
            </div>
          
            
            
            <div class="TCB_Background">
                <i class="fa fa-home icons"></i>
                <input type="text" placeholder="Address" class="field" name="address">
            </div>
<!--             
            <div class="TCB_Background">
                <input type="radio" class="radio_b" name="gen" value="Male">
                <label style="margin-right: 30px;">Male</label>
                <input type="radio" class="radio_b" name="gen" value="Female ">
                <label>Female</label> -->
            </div>
            <div class="TCB_Background">
                <select class="domain" name="task">
                    <option>Select Your Domain</option>
                    <option>Content</option>
                    <option>Graphic</option>
                    <option>Event's And Publicity </option>
                    <option>Social And VideoGraphy</option>
                    <option>Technical</option>
                    
                </select>
                <div class="arrow"></div>
            </div>
            <div class="TCB_Background">
                <input type="submit" class="button" value="Register" name="Register">
            </div>
        </div>
        </form>
</body>

</html>


<?php
if (isset($_POST['Register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $task = $_POST['task'];

    $stmt = $conn->prepare("INSERT INTO form3 (firstname, lastname, email, number, password, cpassword, address, task) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $firstname, $lastname, $email, $number, $password, $cpassword, $address, $task);
    $stmt->execute();

    if ($stmt) {
        echo "Data inserted";
    } else {
        echo "Failed";
    }
}
?>
