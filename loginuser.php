<?php

include 'conect.php';
session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// if(isset($_POST['submit']))
if(($_SERVER["REQUEST_METHOD"] === "POST")){

   $email = $_POST['mail'];
   $email =  filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);
   if($row->rowCount() > 0){
      $_SESSION['user_id'] = $row['user_id'];
      // for home page
      header('location:./public_dashboard/index_2.php');
   }else{
      echo('<h1>incorrect username or password!</h1>');
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
<body style="background-image: url('./handsome-motorbiker-with-helmet-hands-motorcycle.jpg');
background-size: cover;">
     
      <div class="wel">
     <h1> Motorbike </h1>
     <br>
     <form action="" method="post">
      
        <b><label class="em" for="email">Email:</label></b>
        <br>
    <input type="email" name="mail" class="form-control" >
     
    <br>
      
      <b><label class="ps" for="password">Password:</label></b>
    <br>
    <input type="password" name="pass" class="form-control">
     
     <br>
      <!-- <a href="" class="fp">Forget Password</a> -->
      <br>
      <br>
      <a href="userregister.php" class="acc">Need an account ?  Sign up</a>
      <br>
      <button type="submit" id="sub" >Login </button>
     </form> 
     <br> 
     <div class=" icons" >
        <a href=""><i class="fa-brands fa-square-facebook"></i></a>
        <a href=""><i class="fa-brands fa-square-twitter"></i></a>
        <a href=""><i class="fa-brands fa-square-instagram"></i></a>
    </div>
    </div>
  
    
</body>
</html>

<?php

?>