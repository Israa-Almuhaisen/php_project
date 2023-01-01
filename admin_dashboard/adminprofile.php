<?php
 session_start();
include ("./includers/head.php");
?>
<body>
<div class="container-fluid position-relative d-flex p-0">
<?php
include ("./includers/sidebar.php");
?>

<div class="content">
    <div>
<?php
include ("./includers/navbar.php");

?>
     <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded justify-content-center mx-0">
                    <!-- <div class="col-md-6 text-center"> -->
                         <!-- <h3>Wellcome to admin dashboard</h3>  -->
                    <!-- </div>  -->
                                        <!-- add user form -->
                                        <div class="col-sm-12 col-xl-8">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">edit your profile</h6>
                            <form method="POST">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="name" value=<?php echo  $_SESSION["user_name"]; ?>>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="email" value=<?php echo  $_SESSION["email"]; ?>>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" name="user_pass"value=<?php echo  $_SESSION["password"]; ?>>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" name="user_phone"value=<?php echo  $_SESSION["phone"]; ?>>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="formFile" class="form-label">change your photo</label>
                                <input class="form-control bg-dark" type="file" id="formFile"name="user_pic" value=<?php echo  $_SESSION["pic"]; ?>>
                              </div>
                               
                                <button type="submit" class="btn btn-primary">edit</button>
                            </form>
                        </div>
                    </div>
                   <?php
                  
                //     echo "<pre>";

                //    print_r ($_SESSION);
                //    echo "</pre>";
                   ?>
                  

                    
                 </div>
                 
    </div> 
    </div>
</div>
<?php
include ("./includers/java.php");

?>
</div>
</body>

</html>


<?php

 
$msg = "";

include("./config.php");
 
// If upload button is clicked ...
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    print_r ($_FILES);
    $new_name=$_POST["name"];
    $new_email=$_POST["email"];
    $new_phone=$_POST["user_phone"];
    $new_pic=$_POST["user_pic"];
    $new_password=$_POST["user_pass"];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
     
 
    // Get all the submitted data from the form
    // $sql = "UPDATE `users` SET `user_name`='$new_name',`phone`='$new_phone',`email`='$new_email',`password`='$new_password',`pic`=' $new_pic'WHERE user_id= $_SESSION[user_id]";
 
    // Execute query
    // mysqli_query($con, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}

?>



















Warning: Undefined array key "uploadfile" in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 100

Warning: Trying to access array offset on value of type null in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 100

Warning: Undefined array key "uploadfile" in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 101

Warning: Trying to access array offset on value of type null in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 101
Failed to upload image!
Warning: Undefined array key "phone" in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 96 Warning: Undefined array key "pic" in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 97 Warning: Undefined array key "password" in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 98 Warning: Undefined array key "uploadfile" in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 99 Warning: Trying to access array offset on value of type null in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 99 Warning: Undefined array key "uploadfile" in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 100 Warning: Trying to access array offset on value of type null in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 100 Warning: Undefined variable $con in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 109 Fatal error: Uncaught TypeError: mysqli_query(): Argument #1 ($mysql) must be of type mysqli, null given in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php:109 Stack trace: #0 C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php(109): mysqli_query(NULL, 'UPDATE `users` ...') #1 {main} thrown in C:\xampp\htdocs\php_project\admin_dashboard\adminprofile.php on line 109