<!--    MySQL 접속  -->

<?php

$servername = 'remotemysql.com';
$username = '0BT3dM4yI7';
$password = 'ftCCNct3x1';
$db = '0BT3dM4yI7';

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("접속 실패: " . mysqli_connect_error() . '<hr><p>관리자에게 문의하세요</p>');
}

?>