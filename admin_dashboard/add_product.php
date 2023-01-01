<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data"
>
    <div class="col-sm-12 col-xl-12">
      <div class="bg-secondary rounded h-100 p-4">
          <h4 class="mb-4">ADD PRODUCT</h4>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPassword"
                  placeholder="Password" name="product_name"> 
              <label for="floatingPassword">product_name</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPassword"
                  placeholder="Password" name="description">
              <label for="floatingPassword">description</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPassword"
                  placeholder="Password" name="model_year">
              <label for="floatingPassword">model_year</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPassword"
                  placeholder="Password" name="price">
              <label for="floatingPassword">price</label>
          </div>
          <div class="form-floating mb-3">
          <input class="form-control bg-dark" type="file" name="pic_main">
              <label for="floatingPassword"></label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPassword"
                  placeholder="Password" name="in_stock">
              <label for="floatingPassword">in_stock</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPassword"
                  placeholder="Password" name="discount">
              <label for="floatingPassword">discount</label><br>
              <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
          
      </div>
    </div>
</form>
</body>

<?php
    // add products in products table
      if($_SERVER["REQUEST_METHOD"]==="POST"){
        require_once("config.php");
        // save photo in products folder
        $main_pic= $_FILES['pic_main'];
        $filename = $_FILES["pic_main"]["name"];
        $filename=trim($filename);
        $tempname = $_FILES["pic_main"]["tmp_name"];
        $folder = "./img/products/" . $filename;
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    
        // insert products in database
        $sql = "INSERT INTO products (product_name, description, model_year, price, pic_main, in_stock, discount) VALUES ('$_POST[product_name]','$_POST[description]','$_POST[model_year]','$_POST[price]','$filename', '$_POST[in_stock]', '$_POST[discount]' )";
        $conn->query($sql);
        header("location: blank.php");
          echo $_POST["product_name"];
          echo "<br>";
          echo $_POST["description"];
          echo "<br>";
          echo $_POST["model_year"];
          echo "<br>";
          echo $_POST["price"];
          echo "<br>";
          echo "<pre>";
          print_r($_FILES["pic_main"]) ;
          echo "</pre>";
          echo "<br>";
          echo $_POST["in_stock"];
          echo "<br>";
          echo $_POST["discount"];
          echo "<br>";
          echo $folder;
          }
