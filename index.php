<!--    메인 화면       -->

<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header('Location: /auth.php');     // 로그인 정보가 없을 시 로그인 페이지로 이동
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OLS</title>
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./src/css/style.css">
    
    <!-- jQuery 3.4.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- Custom Script -->
    <script src="./src/js/script.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#record').click(function() {
                location.href = './record.php';
            })
            $('#broken').click(function() {
                location.href = './broken.php';
            })
        })
    </script>
</head>
<body>
    <nav>
        <?php
            if (isset($_SESSION['user'])) {     // 세션 정보가 있을 경우 로그인 정보 표시
                echo '<span>' . $_SESSION['user'] . '</span>' . ' | ';
                echo '<a href="/logout.php">로그아웃</a>';
            }
        ?>
    </nav>
    <main>
        <h1>OLS</h1>
        <p>Online-based Laptop Management System</p>

        <form action="./show.php" method="post">
            <input type="submit" name="todo" value="대여">
            <input type="submit" name="todo" value="반납">
        </form>

        <button id="record">대여 및 반납 목록</button>
        <button id="broken">노트북 고장 신고</button>

        <!-- <a href="./test/lend.php" class="btn">대여</a>
        <a href="./test/return.php" class="btn">반납</a>
        <a href="./list.php" class="btn">대여 및 반납 목록</a>
        <a href="./broken.php" class="btn">노트북 고장 신고</a> -->

    </main>
</body>
</html>