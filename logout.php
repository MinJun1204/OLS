<!--    로그아웃 처리       -->

<?php

session_start();
session_unset();
session_destroy();

header('Location: /')

?>