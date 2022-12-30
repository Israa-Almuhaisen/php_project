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
                        <form>
                            <h6 class="mb-4">Add New Category</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="New Category">
                                <label for="floatingInput">Name Category</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Category picture</label>
                                <input class="form-control bg-dark" type="file" id="formFile">
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
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Category Id</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">created At</th>
                                            <th scope="col">Last Updated At</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>456</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td>Member</td>
                                        </tr>
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