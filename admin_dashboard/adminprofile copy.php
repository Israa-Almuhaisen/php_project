<?php
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
                            <h6 class="mb-4">Add New User</h6>
                            <form method="POST">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" name="user_pass">
                                    </div>
                                </div>
                                <fieldset class="row mb-3" name="role">
                                    <legend class="col-form-label col-sm-2 pt-0">Role</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="User" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                User
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="Admin">
                                            <label class="form-check-label" for="gridRadios2">
                                                Admin
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <?php
                    include ("./includers/reg.php");
                    include ("./config.php");
                    if ($_SERVER["REQUEST_METHOD"] === "POST"){
                    $val_email=(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
                    $val_pass = preg_match($pass_reg, $_POST["user_pass"]);
                    $val_name = preg_match($name_reg, $_POST["name"]);
                    if ($_POST["gridRadios"] == "Admin"){
                        $role = 1;
                    }else {
                        $role = 0;
                    }
                    if ($val_name && $val_email && $val_pass) {
                        $n =$_POST["name"]  ;
                        $e = $_POST["email"] ;
                        $p =  $_POST["user_pass"] ;
                        $sql = "INSERT INTO users ( user_name,email,password,is_admin) VALUES ('$n','$e','$p',$role)";
                        $conn->query($sql);
                    }else {
                        echo "invaild";
                    }

                }   
                    ?>
                    
                 </div>
                 
    </div> 
    </div>
</div>
<?php
include ("./includers/java.php");
include("./includers/backtotop.php");
?>
</div>
</body>

</html>