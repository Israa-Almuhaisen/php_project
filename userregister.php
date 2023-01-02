<?php

include 'conect.php';

session_start();

// if(isset($_SESSION['user_id'])){
//    $user_id = $_SESSION['user_id'];
// }else{
//    $user_id = '';
// };

// if(isset($_POST['submit'])){

//    $name = $_POST['name'];
//    $name = htmlspecialchars($name, ENT_QUOTES);
//    $email = $_POST['email'];
//    $email = htmlspecialchars($email, ENT_QUOTES);
//    $pass = sha1($_POST['pass']);
//    $pass = htmlspecialchars($pass, ENT_QUOTES);
//    $cpass = sha1($_POST['cpass']);
//    $cpass = htmlspecialchars($cpass, ENT_QUOTES);

//    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
//    $select_user->execute([$email,]);
//    $row = $select_user->fetch(PDO::FETCH_ASSOC);

//    if($select_user->rowCount() > 0){
//        echo('email already exists!');
//    }else{
//       if($pass != $cpass){
//          echo('confirm password not matched!');
//       }else{
//          $insert_user = $conn->prepare("INSERT INTO `users`(user_name, email, password) VALUES(?,?,?)");
//          $insert_user->execute([$name, $email, $cpass]);
//          echo('registered successfully, login now please!');
//       }
//    }

// }



if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $name_reg = "/^[a-zA-Z ]*$/";
    $phone_reg = "/^[0-9]{14}$/";
    $pass_reg = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
    $val_name = preg_match($name_reg, $_POST["user_name"]);
    $val_email=(filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL));
    $val_phone = preg_match($phone_reg, $_POST["user_phone"]);
       $val_pass = preg_match($pass_reg, $_POST["user_pass"]);
    $val_repass = ($_POST["user_pass"] === $_POST["user_repass"]);
    if (($val_repass && $val_pass && $val_phone && $val_email && $val_name)) {
        require_once('conect.php');
        $sql = "INSERT INTO users (name, email, phone,  password) VALUES ('$_POST[user_name]','$_POST[user_email]','$_POST[user_phone]','$_POST[user_birth]','$_POST[user_pass]')";
        $conn->query($sql);
    }
    else {
        echo "invalid <br>";
    }
    // if (!($val_repass)) {
    //     echo "repass <br>";
    // }
    // if (!($val_pass)) {
    //     echo "pass <br>";
    // }
   
   
    // if (!($val_phone)) {
    //     echo "phone <br>";
    // }
    // if (!($val_email)) {
    //     echo "mail <br>";
    // }
    // if (!($val_name)) {
    //     echo "name <br>";
    // }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-------icon page ------- -->
     <script src="https://kit.fontawesome.com/387212a066.js" crossorigin="anonymous"></script>
    <title>register</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <img class="logo" src="../img/logoblack.png">
    
    <div class="cont">
        <div class="forms">
            <div class="form signup">
                <span class="title">Registration</span>
                
   <form  action="" method="post">   
    <!-- <form id="form" action="post" > -->

        <div class="input-field">
            <input type="text" placeholder="Enter your name" id="fname" required>
            <span id="fnameerror" class="text-danger font-weight-bold"></span>
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-field">
            <input type="number" placeholder="Enter your number"  id="num" required>
            <span id="numerror" class="text-danger font-weight-bold"></span>
            <i class="fa-solid fa-mobile-screen"></i>
        </div>

        <div class="input-field">
            <input type="email" placeholder="Enter your email"  id="email" required>
            <span id="mail" class="text-danger font-weight-bold"></span>
            <i class="fa-regular fa-envelope"></i>
        </div>


        <div class="input-field">
            <input type="password" class="password" placeholder="Create a password"  id="password" required>
            <span id="pass" class="text-danger font-weight-bold"></span>
            <i class="fa-solid fa-lock"></i>
        </div>
        <div class="input-field">
            <input type="password" class="password" placeholder="Confirm a password" id="conPass"required>
            <span id="conpass" class="text-danger font-weight-bold"></span>
            <i class="fa-solid fa-lock"></i>
           
        </div>


        <div class="input-field button">
        <button type="submit" onclick="logSubmit()">Sign up</button>
        </div>
    </form>

    <div class="login-signup">
        <span class="text"> Already a member?
            <a href="loginuser.php" class="text login-link">Login Now</a>
        </span>
    </div>
      </div>
      </div>
    </div>
    </div>
    </div>
    <script src="../registration/registr.js"></script>
</body>
</html>

