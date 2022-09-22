<?php
    session_start();
    unset($_SESSION['uat_id']);
    session_unset();
    session_destroy();
    header('Refresh: 1;url=index');
    exit();
?>