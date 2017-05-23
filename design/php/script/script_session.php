<?php
session_start();
if (isset($_SESSION['userID'])) {
    echo "<script>window.location='../main/main.php'</script>";
    die();
}