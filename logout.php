<?php


session_start();

if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
}

if(isset($_SESSION['role'])){
    unset($_SESSION['role']);
}

echo "<script>window.location.href = 'index.php';</script>";

?>