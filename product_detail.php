<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/container.css">
    <link rel="stylesheet" href="./css/product_detail.css">

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
                        <li><a href="register.php">Đăng kí</a></li>
                        <li><a href="login.php">Đăng nhập</a></li>
                        <li><a href="#">Đăng xuấtt</a></li>
                        <li><a href="admin.php">Quản lí</a></li>
                    </ul>
                </div>
            </ul>
        </div>

        <div class="menu-2">
            <div class="logo">
                <a href="index.php"><img with='100px' height="50px" src="./img/logo.png" alt="logo shopee"></a>
            </div>

            <div class="search">
                <input type="text" placeholder="Search for products...">
                <i class="fa-solid fa-magnifying-glass"></i>
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
        // $products = [
        //     [ 'id'=> 1,'img' => './img/ip.jpg',
        //      'name'=> "Ip 3s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
        //     [ 'id'=> 2,'img' => './img/ip.jpg',
        //     'name'=> "Ip 4s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
        //     [ 'id'=> 3,'img' => './img/ip.jpg',
        //     'name'=> "Ip 5s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
        //     [ 'id'=> 4,'img' => './img/ip.jpg',
        //     'name'=> "Ip 6s", 'price' => 20000, 'soluong' => 20,'giamgia' => ''],
        //     [ 'id'=> 5,'img' => './img/ip.jpg',
        //     'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20,  'giamgia' => ''],
        //     [ 'id'=> 6,'img' => './img/ip.jpg',
        //     'name'=> "Ip 8s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
        //     [ 'id'=> 7,'img' => './img/giay.jpg',
        //     'name'=> "NIKE", 'price' => 2010, 'soluong' => 60,  'giamgia' => 'co giam gia'],
        //     [ 'id'=> 8,'img' => './img/giay.jpg',
        //     'name'=> "Ip 7s", 'price' => 20000, 'soluong' => 20, 'giamgia' => ''],
        // ];

        $index = isset($_GET['id']) ? $_GET['id'] : null;
        // if(isset($_GET['index'])) {
        //     $index = $_GET['index'];
        // }else {
        //     $index = null;
        // }
        include "connect.php";

        // query ra du lieu
        $sql = "SELECT * FROM product WHERE id = '$index'";

        $arr = $conn->query($sql);
        if ($arr->rowCount() > 0) {
            $products = $arr->fetch(PDO::FETCH_ASSOC);
        }


        // $products = $products[$row]; // lay san pham
        if ($products) {
         ?>
            <div class="product_detail">
                <div class="img">
                    <img src="<?php echo $products['img']; ?>" alt="">
                </div>

                <div class="info">
                    <h3><?php echo $products['name']; ?></h3>
                    <div class="vote">
                        <ul>
                            <li style="list-style-type: none;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                            <li>3.1k Đánh Giá</li>
                            <li>Đã Bán 30.4k</li>
                        </ul>
                    </div>

                    <div class="price">
                        <p><?php echo $products['price']; ?></p>
                    </div>
                    <div class="dec">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, doloribus deserunt
                            quibusdam minus sit ab repellendus ipsam ad illum minima? Sit debitis, dignissimos
                            corporis eveniet possimus facere ex qui error.
                        </p>
                    </div>

                    <div class="buy_number">
                        <p>số lượng</p>
                        <button class="minus">-</button>
                        <input type="number">
                        <button class="plus">+</button>
                        <i>9324 Sản phẩm có sẵn</i>
                    </div>

                    <p class="clear"></p>
                    <div class="add-buy">
                        <button class="add">Thêm giỏ hàng</button>
                        <button class="buy">Mua ngay</button>
                    </div>
                </div>
            </div>
         <?php
        } else {
            echo "<h1>San pham khong hop le</h1>";
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