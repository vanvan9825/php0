<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="container">
        <div class="home">
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
        </div>
        <form action="" method="POST" enctype='multipart/form-data'>
            <h3 style="text-align:center;width:100%">Đăng Kí</h3>
            <label for="">Email</label><br>
            <input type="email" name="email"><br>
            <label for="">Password</label><br>
            <input type="password" name="password"><br>

            <input type="submit" name="register" value="Dang ki">

        </form>

        <?php
            if(isset($_POST['register'])) {
                echo $_POST['email'];
                echo "<br>";
                echo $_POST['password'];
            }
            // connect sql
            // sd cau lenh sql de luu tru du lieu
            
        ?>
    </div>
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>

</html>