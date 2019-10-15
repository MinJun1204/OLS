<!--    사용 가능한 노트북 표시     -->

<?php

function lend() {           // 사용 중이 아닌 노트북 리스트 출력'
    include './connect.php';

    echo '대여 가능한 노트북' . '<br>';
    $query = 'SELECT `id`, `available`, `broken` FROM `laptop`';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i ++;
            echo '<input type="checkbox" name="laptop[]" value="' . $i . '" id="c' . $i . '">';
            echo '<label for="c' . $i . '">';
            if ($row['broken'] == 1) {
                echo '<span class="cspan broken">' . $i . '</span>';
            } else if ($row['available'] == 0) {
                echo '<span class="cspan disabled">' . $i . '</span>';
            } else {
                echo '<span class="cspan">' . $i . '</span>';
            }
            echo '</label>';
        }
    }
    echo '<br><input type="submit" name="todo" value="대여">';
}

function turnIn() {         // 대여된 노트북 리스트 출력'
    include './connect.php';
    session_start();

    echo '대여한 노트북 목록' . '<br>';
    $query = 'SELECT `id`, `user`, `available`, `broken` FROM `laptop`';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i ++;
            echo '<input type="checkbox" name="laptop[]" value="' . $i . '" id="c' . $i . '">';
            echo '<label for="c' . $i . '">';
            if ($row['broken'] == 1) {
                echo '<span class="cspan broken">' . $i . '</span>';
            } else if ($row['user'] == $_SESSION['user'] && $row['available'] == 1) {
                echo '<span class="cspan">' . $i . '</span>';
            } else if ($row['user'] == $_SESSION['user'] && $row['available'] == 0) {
                echo '<span class="cspan alert">' . $i . '</span>';
            } else {
                echo '<span class="cspan disabled">' . $i . '</span>';
            }
            echo '</label>';
        }
    }
    echo '<br><input type="submit" name="todo" value="반납">';
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>선인고 노트북 관리 시스템</title>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./src/css/style.css">
    
    <!-- jQuery 3.4.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.cspan:not(.alert)').click(function(event) {
                <?php

                if ($_POST['todo'] == "대여") {
                    echo "$(this).toggleClass('aquamarine');";
                } else {
                    echo "$(this).toggleClass('burlywood');";
                }
                ?>
            });
            
            $('.alert').click(function() {
                alert('노트북이 인식되지 않습니다. 노트북 삽입 후 새로고침 해주세요.')
            })
        });
    </script>
</head>
<body>
    <main>
        <form action="./query.php" method="post">
            <input type="hidden" name="user" id="user">
            <?php
                if ($_POST['todo'] == '대여') {
                    lend();
                } else {
                    turnIn();
                }
            ?>
        </form>
    </main>
</body>
</html>