<?php
// connect to database
require_once('./admin_dashboard/config.php'); 
// when yser click on submit
if ($_SERVER["REQUEST_METHOD"] === "POST"){
// assign user inputs for variables
$inputpass = $_POST["pass"];
$inputemail = $_POST["mail"];
// query sentence using user inputs as conditions
$sql = "SELECT * FROM users where email = '$inputemail'  and password = '$inputpass'"; 
// excute query sentence
$conn->query($sql);
// extract the resulting array for excuted query
$user = ($conn->query($sql))->fetch_assoc();
// if user inputs does exist in our data base
  if($user){
        session_start();
        // save user data in session for later usage
        $_SESSION['user']["id"]= $user["user_id"];
        $_SESSION['user']["name"]= $user["name"];
        $_SESSION['user']["email"]= $user["email"];
        $_SESSION['user']["phone"]= $user["phone"];
        $_SESSION['user']["password"]= $user["password"];
        $_SESSION['user']["is_admin"]= $user["is_admin"];
        // redirect user for home page
        header('location:./public_dashboard/index_2.php');
    }
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
    <title>login</title>
    <link rel="stylesheet" href="style1.css">
 

</head>
<body  style="background-color: rgb(0, 0, 0);
   background-size: cover;" >
 <div>
  <img  style=" margin-bottom:-10px; margin-left:40px"   src="../php_project/logomotor (2).png"  width="15%"    alt="">
</div>
      <div class="wel" style="background-color: white ;
   background-size: cover; margin-top:110px; position: relative; top:200px">          
     <h1 style="color:rgb(203, 47, 47) ;"> Motorbike </h1>
     <br>
     <br>
     <form action="" method="post">
      
        <b><label style="color:black ; font-size:20px;" class="em" for="email">Email:</label></b>
        <br>
    <input type="email" name="mail" class="form-control" >
     
    <br>
      
      <b><label style="color:black ; font-size:20px" class="ps" for="password">Password:</label></b>
    <br>
    <input   type="password" name="pass" class="form-control">
     
     <br>
    <?php  if ($_SERVER["REQUEST_METHOD"] === "POST"){echo "<p style='color:red'>Invalid email or password<p>";}
    ?>
      <br>
      <br>
      <a    style="color:black ; font-size:20px;    " href="userregister.php" class="acc">Need an account ?<span    href=" href="userregister.php"   style="color:red"> Sign up</span> </a>
      <br>
      <button style="color: white ;  box-shadow: 0 10px 15px black ; background:black " type="submit" id="sub" >Login </button>
     </form> 
     <br> 
    </div>
  
    
</body>
</html>