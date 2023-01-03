<?php
include ("./includers/head.php");

session_start();

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
                    <!-- table -->
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">ORDERS</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">user_name</th>
                                            <th scope="col">phone</th>
                                            <th scope="col">address</th>
                                            <th scope="col">Order_at</th>
                                            <th scope="col">order_total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include ("./config.php");
                                        // $sql = "SELECT * FROM orders";
                                        // $data= $conn->query($sql);
                                        $i = 1;
                                        $html = "";
                                        // foreach($data as $row) {
                                            $user_with_order = "SELECT * 
                                            FROM orders
                                                                INNER JOIN users WHERE orders.user_id = users.user_id";
                                            $new_data = $conn->query($user_with_order);
                                            foreach ($new_data as $user){                                         
                                            $e_id = $user['user_name'];
                                            // $e_name = $row['user_name'];
                                            $e_phone = $user['order_phone'];
                                            // $e_email = $row['email'];
                                            // $e_password = $row['password'];
                                            $e_address = $user['address'];
                                            $ordered_at = $user['ordered_at'];
                                            $order_total = $user['order_total'];
                                            // if($e_is_admin == 1){ $x = 'Yes';} else { $x = 'No';}
                                            $html .= "<tr><th scope='row'>$i</th>";
                                            $html .= "<td>$e_id</td>";
                                            $html .= "<td>$e_phone</td>";
                                            $html .= "<td>$e_address</td>";
                                            $html .= "<td>$ordered_at</td>";
                                            $html .= "<td>$order_total</td>";
                                            // $html .= "<td>" . $x ."</td>";
                                            // $html .= "<td><a href='delete_user.php?deleteid=$e_id'><button>delete</button></a></td>";
                                            $html .= "</tr>";
                                            $i++;
                                        }
                                        echo $html;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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