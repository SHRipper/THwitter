<?php
$userId = "1";//read from cookie
$message = $_post["text"];

$pdo = new PDO("mysql:dbname=THwitterDB;host=localhost", "RubberDuck", "WebProg");
$sql = "insert into Post(sender_id, message, timestamp)
values(?, ?, localtime());";

$statement = $pdo->prepare($sql);
$result->execute(array($userId, $message));
?>