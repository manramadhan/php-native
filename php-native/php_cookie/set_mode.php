<?php
    $ambil_mode = $_POST['mode'];
    setcookie('mode', $ambil_mode, time() + 3600);
    header('Location: cookie.php');
?>