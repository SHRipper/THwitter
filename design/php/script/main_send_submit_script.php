<?php
session_start();

$userId = $_SESSION['user_id']; //read from session
$message = $_POST['text'];

include 'script_connect_db.php';

$sql = "INSERT INTO Post(sender_id, message) VALUES (?, ?)";
$statement = $pdo->prepare($sql);
$statement->execute(array($userId, $message));

echo "<script>window.location='../main/main.php'</script>";
