<!--    회원가입 화면    -->

<?php

include './connect.php';

$name = $_POST['name'];
$pwd = $_POST['password'];
if (isset($_POST['admin'])) {
    $admin = 1;
} else {
    $admin = 'NULL';
}

$query = "INSERT INTO user VALUES ('$name', '$pwd', $admin)";

if (mysqli_query($conn, $query)) {
    echo '<script>alert("회원가입이 완료되었습니다"); history.back();</script>';
} else {
    echo '<script>alert("문제가 발생하였습니다. 관리자에게 문의하세요\n' . mysqli_error($conn) . '");history.back();</script>';
}

mysqli_close($conn);

?>