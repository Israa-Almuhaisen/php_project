<?php
include("./config.php");


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
                            <form method="POST" enctype="multipart/form-data">
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
                                <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
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
    // print_r ($_FILES)
    $new_name=$_POST["name"];
    $new_email=$_POST["email"];
    $new_phone=$_POST["user_phone"];
    $new_password=$_POST["user_pass"];



    $image = $_FILES['image']['name'];
    // قراءة حجم الصورة
       $image_size = $_FILES['image']['size'];
    // تحديد المسار الموجودة فيه الصورة
       $image_tmp_name = $_FILES['image']['tmp_name'];
    // تحديد المسار الجديد للصورة و تذكر انه يجب انشاء مجلد جديد مشابه للاسم المختار في المسار الجديد
       $image_folder = './img/'.$image;
    
    
    // قراءة جميع المنتجات الموجودة في الداتابيس لتأكد من ان اسم المنتج غير متكرر , جدول المنتجات-عمود الاسم
    
    // علامة الاستفهام تعني انتظار عنصر في فانكشين ال الاكسكيوت , اذا بدك حط المتغير مباشرة ولكن الافضل هو هاي
    
    
    // القيام برفع كافة تفاصيل المنتج التي تم ادخالها و يجب التاكد من ان عدد الاعمدة مساوي لعدد البيانات المراد رفعها
    
          $insert_products = $conn->prepare("INSERT INTO `users`(pic) VALUES(?)");
          $insert_products->execute([$image]);
    
    
    // شرط للتأكد من ان حجم الصورة اقل من 2 ميجا
    
    
          if($insert_products){
             if($image_size < 2000000){
                move_uploaded_file($image_tmp_name, $image_folder);
             }
    
          }

        }

?>