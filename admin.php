<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/container.css">
    <link rel="stylesheet" href="./css/admin.css">


</head>
<body>

    <div class="header">
        <div class="menu-1">
            <ul>
                <li><a href="#">Kenh nguoi ban</a></li>
                <li><a href="#">Tai ung dunh</a></li>
                <li><a href="#">ket noi</a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>

            <ul style="position: relative;">
                <li><a href="#">thong bao</a></li>
                <li><a href="#">ho tro</a></li>
                <li><a href="#">tieng viet</a></li>
                <li id="user"><a href="#">user</a></li>
                <div class="action hidden">
                    <ul>
                        <li><a href="register.php">Dang ki</a></li>
                        <li><a href="login.php">Dang nhap</a></li>
                        <li><a href="#">Dang xuat</a></li>
                        <li><a href="admin.php">Quan li</a></li>
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

            
       
        ?>
        <div class="add_product">
            <a href="add_product.php">Thêm Sửa Xóa</a>
        </div>
        <table border="1">
            <tr>
                <td>STT</td>
                <td>Tên</td>
                <td>Gía</td>
                <td>Ảnh</td>
                <td>Sửa</td>
                <td>Xóa</td>
            </tr>
            
            <?php
                $i = 1;
                foreach($products as $index => $product) {
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $product[ 'name']; ?></td>
                        <td><?php echo $product[ 'price']; ?></td>
                        <td><img width="50px" height="50px" src="<?php echo $product[ 'img']; ?>" alt=""></td>
                        <td><a href="update.php?index=<?php echo $index; ?>">Sửa</a></td>
                        <td><a href="#">Xóa</a></td>
                    </tr>
                    <?php 
                }
            ?>
            
            <!-- <tr>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td><a href="#">Sua</a></td>
                <td><a href="#">Xoa</a></td>
            </tr> -->
            <!-- <tr>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td><a href="#">Sua</a></td>
                <td><a href="#">Xoa</a></td>
            </tr>
            <tr>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td><a href="#">Sua</a></td>
                <td><a href="#">Xoa</a></td>
            </tr>
            <tr>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td>demo text</td>
                <td><a href="#">Sua</a></td>
                <td><a href="#">Xoa</a></td>
            </tr> -->
        </table>
       
    </div>

    <div class="footer">
        <b>Xuong thuc hanh php</b>
    </div>
    
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>
<script src="js.js"></script>
</html>