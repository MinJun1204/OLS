<!--    노트북 고장 신고 화면   -->

<?php

function broken() {           // 사용 중이 아닌 노트북 리스트 출력'
    include './connect.php';

    echo '<p>사용이 가능 / 불가능한 노트북을 선택해주세요</p><br>';
    $query = 'SELECT `id`, `broken` FROM `laptop`';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i ++;
            echo '<input type="checkbox" name="laptop[]" value="' . $i . '" id="c' . $i . '">';
            echo '<label for="c' . $i . '">';
            if ($row['broken'] == 1) {
                echo '<span class="cspan broken">' . $i . '</span>';
            } else {
                echo '<span class="cspan">' . $i . '</span>';
            }
            echo '</label>';
        }
    }
    echo '<br><input type="submit" value="확인">';
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
            $('.cspan').click(function(event) {
                $(this).toggleClass('broken');
            });
        });
    </script>
</head>
<body>
    <main>
        <form action="./broken_proc.php" method="post">
            <h1>노트북 고장 신고</h1>
            <?php broken(); ?>
        </form>
    </main>
</body>
</html>