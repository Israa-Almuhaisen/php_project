<?php 
require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include('./include/include_head.php');?>


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">


                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">                            
                        <form action="categoryAdd.php" method="post" enctype="multipart/form-data">
                            <h6 class="mb-4">Add New Category</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="category_name" id="floatingInput"
                                    placeholder="New Category">
                                <label for="floatingInput">Category Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="category_price" id="floatingInput"
                                    placeholder="New Category">
                                <label for="floatingInput">price</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Category Image</label>
                                <input class="form-control bg-dark" type="file" name="file" id="formFile">
                            </div>
                            
                            
                            <!-- <div class="form-floating">
                                <textarea class="form-control" placeholder="discription"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                            <p></p> -->

                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                        </div>
                    </div>
                    

               
            <!-- Form End -->

            <!-- table start -->
            <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <!-- <h6 class="mb-4">Categories Table</h6> -->
                            <div class="table-responsive">
                                <?php
                                $html = "
                                <table class='table' id='category_table'>
                                    <thead>
                                        <tr>
                                            <th scope='col'>Category Id</th>
                                            <th scope='col'>Category Name</th>
                                            <th scope='col'>Image</th>
                                            <th scope='col'>Created At</th>
                                            <th scope='col'>Last Updated</th>
                                            <th scope='col'>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
                                    
                                        $sql = "SELECT * FROM categories";
                                        $data= $conn->query($sql);
                                        foreach($data as $elemant) {
                                            if($elemant['category_is_deleted']==0){

                                        $html .= "<tr><th scope='row'>$elemant[category_id]</th>";
                                        $html .= "<td>$elemant[category_name]</td>";
                                        $html .= "<td><img src='$elemant[category_pic]' alt='$elemant[category_name]' width='100' height='100'></td>";                                            
                                        $html .= "<td>$elemant[category_created_at]</td>";
                                        $html .= "<td>$elemant[category_last_updated_at]</td>";
                                        $html .= "<td><form method='POST' action='./category_delete.php'><input type='hidden' name='category_id' value='$elemant[category_id]' /><button type='submit' value='delete'>Delete</button></form>
                                        <form action='./category_edit.php' method='POST'><input type='hidden' name='category_id' value='$elemant[category_id]' /><button type='submit' name = '$elemant[category_id]'>Edit</button></form><br>
                                        </td>
                                        </tr>";
                                        } }
                                        $html .="</tbody></table>";

                                        echo $html;
                                        require("category_delete.php");

                                        ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        
             <!-- table end -->

             
                </div>
             </div>


<!-- Footer Start -->
<?php include('./include/include_footer.php');?>