<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'xuong_php';

try {
    //$conn= mysqli($servarname, $username, $password, $dbname )
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "ket noi thanh cong";

} catch (PDOException $e) {
    echo "loi" . $e->getMessage();
    //throw $th;
}

?>