<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/container.css">

</head>
<body>

    <div class="header">
        <div class="menu-1">
            <ul>
                <li><a href="#">Kênh người bán</a></li>
                <li><a href="#">Tải ứng dụng</a></li>
                <li><a href="#">Kết nối</a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>

            <ul style="position: relative;">
                <li><a href="#">Thông Báo</a></li>
                <li><a href="#">Hỗ Trợ</a></li>
                <li><a href="#">Tiếng Việt</a></li>
                <li id="user"><a href="#">User</a></li>
                <div class="action hidden">
                    <ul>
                        <?php
                            // session_set_cookie_params(3600);
                            session_start();
                            // echo $_SESSION['username'];
                            function isLogin() {
                                $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
                                echo "username:".$username;
                                // die();
                                if($username) {
                                    return true;
                                }
                                return false;
                            }

                            if(isLogin()) {
                                ?>
                                <li><a href="logout.php">Đăng Xuất</a></li>
                                <?php
                                    $role = $_SESSION['username'];
                                    if($role == 'admin') {
                                        ?>
                                        <li><a href="admin.php">Quản lí</a></li>
                                        <?php
                                    }
                                ?>
                                <?php
                            }else {
                                ?>
                                <li><a href="register.php">Đăng kí</a></li>
                                <li><a href="login.php">Đăng Nhập</a></li>
                                <?php
                            }
                        ?>
                        
                        
                        
                    </ul>
                </div>
            </ul>
        </div>

        <div class="menu-2">
            <div class="logo">
                <img onclick="handleClick()" with='100px' height="50px" src="./img/logo.png" alt="logo shopee">
            </div>

            <div class="search">
                <form action="" method="GET" enctype='multipart/form-data'>
                    <input name="search" type="text" placeholder="Search for products...">
            

                    <input type="submit" name="tim" value="Tìm">
                    <!-- <button id="add_product" type="submit" name="add_product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button> -->

                </form>

                <?php

                    


                //     session_start();

                //    unset($_SESSION['username']);

                ?>
            </div>

            <div class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>

        <div class="menu-3">
            <ul>
                <li><a href="#">Giày vs</a></li>
                <li><a href="#">Áo mưa</a></li>
                <li><a href="#">Móc quần áo</a></li>
                <li><a href="#">Giày cao cấp</a></li>
                <li><a href="#">Ruột Bút BI</a></li>
                <li><a href="#">Bitis Hunter</a></li>
                <li><a href="#">Giày nam</a></li>
                <li><a href="#">Giày Nữ</a></li>
                <li><a href="#">Mũ Bảo Hiểm</a></li>
            </ul>
        </div>

    </div>

    <div class="container">

        <?php
            include "connect.php";

            // query ra du lieu
            $sql = "SELECT * FROM product";

            $arr = $conn->query($sql);
            if($arr->rowCount() > 0){
                while($row = $arr->fetch(PDO::FETCH_ASSOC)){
                    // var_dump($row);
                    // echo "<br>";
                    $products[] = $row;
                }
            }
            // die();
            // $products = [
            //     [ 'id'=> 1,'img' => './img/ip.jpg',
            //      'name'=> "Ip 3s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
            //     [ 'id'=> 2,'img' => './img/ip.jpg',
            //     'name'=> "Ip 4s pro", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
            //     [ 'id'=> 3,'img' => './img/ip.jpg',
            //     'name'=> "Ip 5s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
            //     [ 'id'=> 4,'img' => './img/ip.jpg',
            //     'name'=> "Ip 6s pro", 'price' => 20000, 'soluong' => 20,'giamgia' => ''],
            //     [ 'id'=> 5,'img' => './img/ip.jpg',
            //     'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20,  'giamgia' => ''],
            //     [ 'id'=> 6,'img' => './img/ip.jpg',
            //     'name'=> "Ip 8s pro", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
            //     [ 'id'=> 7,'img' => './img/ip.jpg',
            //     'name'=> "NIKE", 'price' => 2010, 'soluong' => 60,  'giamgia' => 'co giam gia'],
            //     [ 'id'=> 8,'img' => './img/ip.jpg',
            //     'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
            // ];

           
        function searchProduct($search, $products) {
            $product_search=[];
            foreach($products as $key =>$product) {
                if(strpos(strtolower($product['name']), strtolower($search)) !== FALSE){
                    $product_search[$key] = $product;
                }
            }

            return $product_search;
        }

        if(isset($_GET['tim'])){
            $search = $_GET['search'];
            if(!empty($search)) {
                $product_search = searchProduct($search, $products);

                if(!empty($product_search)) {

                    foreach($product_search as $key=> $item){
                        echo '<div class="product">
                        <div class="img">
                            <img width="100px" height="50px" src="'.$item['img'].'" alt="" />
                        </div>

                        <div class="title">
                            <h2><a href="product_detail.php?id='.$item['id'].'&message=hihi&number=100">'.$item['name'].'</a></h2>
                        </div>

                        <div class="info">
                            <b>'.$item['price'].'</b>
                            <i>abc</i>
                        </div>
                    </div>';
                    }
                    
                }
                else {
                    echo "<h1?>Không tìm thấy sản phẩm</h1>";
                }
                

            } else {
                // cach 1
                foreach($products as $index => $product) {
                    ?>
                    <div class="product">
                        <div class="img">
                            <img width="100px" height="50px" src="<?php echo $product['img']; ?>" alt="">
                        </div>

                        <div class="title">
                            <h2><a href="product_detail.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h2>
                        </div>

                        <div class="info">
                            <b><?php echo $product['price']; ?></b>
                            <i>abc</i>
                        </div>

                        <div class="giamgia">
                            <?php
                            // if(strlen($product['giamgia']) != 0) {
                            //     echo "<i>có giảm giá</i>";
                            // }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }

        } else {
            // cach 1
            foreach($products as $index => $product) {
                ?>
                <div class="product">
                    <div class="img">
                        <img width="100px" height="50px" src="<?php echo $product['img']; ?>" alt="">
                    </div>

                    <div class="title">
                        <h2><a href="product_detail.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h2>
                    </div>

                    <div class="info">
                        <b><?php echo $product['price']; ?></b>
                        <i>abc</i>
                    </div>

                    <div class="giamgia">
                        <?php
                        // if(strlen($product['giamgia']) != 0) {
                        //     echo "<i>có giảm giá</i>";
                        // }
                        ?>
                    </div>
                </div>
                <?php
            }
        }
            
        
      ?>
    </div>

    <div class="footer">
        <b>Xưởng Thực Hành PHP</b>
    </div>
    
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>
<script src="js.js"></script>
</html>