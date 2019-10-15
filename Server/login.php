<!--    로그인 처리     -->

<?php

include './connect.php';
session_start();

$username = $_POST['username'];
$pw = $_POST['password'];
$query = "SELECT pw FROM user WHERE name = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($pw == $row['pw']) {
            $_SESSION['user'] = $username;
            header('Location: /');
        } else {
            echo '<script>alert("비밀번호가 틀렸습니다"); history.back();</script>';
        }
    }
} else {
    echo '<script>alert("일치하는 사용자가 없습니다"); history.back();</script>';
}

mysqli_close($conn);

?>