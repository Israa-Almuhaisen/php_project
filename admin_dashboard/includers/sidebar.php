    <!-- Content Start -->
    <!-- <div class="content">     -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="http://localhost/php_project-1/admin_dashboard/adminprofile.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="./img/testimonial-2.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo  $_SESSION["user_name"]; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../admin_dashboard/adminprofile.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="../admin_dashboard/blank.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Products</a>
                    <a href="./categories.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Category</a>
                    <a href="./order.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Orders</a>
                    <a href="./users.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Users</a>
                    <a href="./logout.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Logout</a>
                      
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
    <!-- </div> -->