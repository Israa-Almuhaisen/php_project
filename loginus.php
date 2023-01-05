<?php
// session_start();

require_once('./admin_dashboard/config.php'); 
$sql = "SELECT * FROM users"; // query sentence .. جملة الكويري
$conn->query($sql); // execute query sentence on $conn database .. تنفيذ جملة الكويري على الداتا بايس اللي مثلتها بالمتغير كون
// $users = ($conn->query($sql))->fetchAll(PDO::FETCH_ASSOC);

// (PDO::FETCH_ASSOC) لغى التكرار
// fetchAll بتحول البيانات لأرراي


if ($_SERVER["REQUEST_METHOD"] === "POST"){

  foreach($users as $ele){
    if ($ele["email"]=== $_POST["user_email_Login"] && $ele["password"] === $_POST["user_password_Login"]){
    echo "<pre>";
    print_r($ele);
    echo "</pre>";
        session_start();
        $_SESSION["id"]= $ele["id"];
        $_SESSION["name"]= $ele["name"];
        $_SESSION["email"]= $ele["email"];
        $_SESSION["phone"]= $ele["phone"];
        $_SESSION["password"]= $ele["password"];
        $_SESSION["is_admin"]= $ele["is_admin"];
        header('location:./public_dashboard/index_2.php');
    }

  };

}
print_r($conn);
echo "<br>";

echo "<pre>";
print_r($conn->query($sql));
echo "</pre>";
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
   
      <br>
      <br>
      <a    style="color:black ; font-size:20px;    " href="userregister.php" class="acc">Need an account ?<span    href=" href="userregister.php"   style="color:red"> Sign up</span> </a>
      <br>
      <button style="color: white ;  box-shadow: 0 10px 15px black ; background:black " type="submit" id="sub" >Login </button>
     </form> 
     <br> 
     <!-- <div  >
        <a href=""><i class="fa-brands fa-square-facebook"></i></a>
        <a href=""><i class="fa-brands fa-square-twitter"></i></a>
        <a href=""><i class="fa-brands fa-square-instagram"></i></a>
    </div> -->
    </div>
  
    
</body>
</html>



<?php
// include 'conect.php';
// session_start();

// if(isset($_SESSION['user_id'])){
//    $user_id = $_SESSION['user_id'];
// }else{
//    $user_id = '';
// };

// // if(isset($_POST['submit']))
// if(($_SERVER["REQUEST_METHOD"] === "POST")){

//    $email = $_POST['mail'];
//    $email =  filter_var($email, FILTER_SANITIZE_STRING);
//    $pass = sha1($_POST['pass']);
//    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   

//    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
//    $select_user->execute([$email, $pass]);
//    $row = $select_user->fetch(PDO::FETCH_ASSOC);
//    if($row->rowCount() > 0){
//       $_SESSION['user_id'] = $row['user_id'];
//       // for home page
//       header('location:./public_dashboard/index_2.php');
//    }else{
//       echo('<h1>incorrect username or password!</h1>');
//    }

// }


// ________________________________
// session_start();

// if(isset($_SESSION['user_id'])){
//    $user_id = $_SESSION['user_id'];
// }else{
//    $user_id = '';
// }

// if(isset($_POST['submit'])){

//    $email = $_POST['email'];
//    $email =  htmlspecialchars($email, ENT_QUOTES);
//    $pass = sha1($_POST['pass']);
//    $pass = htmlspecialchars($pass, ENT_QUOTES);


//    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
//    $select_user->execute([$email, $pass]);
//    $row = $select_user->fetch(PDO::FETCH_ASSOC);

//    if($select_user->rowCount() > 0){
//       $_SESSION['user_id'] = $row['user_id'];
//       header('location:./public_dashboard/index_2.php');
//    }else{
//       $message[] = 'incorrect username or password!';
//    }








?>

