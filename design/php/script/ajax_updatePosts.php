<?php
session_start();
include '../script/script_connect_db.php';
header("Content-Type: application/json");

$highestId = -1;
if (isset($_SESSION['lastPostId'])) {
    $highestId = $_SESSION['lastPostId'];
}
$sql = "SELECT post_id AS id, message AS message, username AS author, DATE_FORMAT(DATE_ADD(timestamp, INTERVAL 2 HOUR), '%d.%m.%Y %H:%i') AS time
            FROM Post post
            JOIN User author ON post.sender_id = author.user_id
            WHERE post_id > ?
            ORDER BY timestamp DESC";

$statement = $pdo->prepare($sql);
$statement->execute(array($highestId));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result AS $post) {
    if ($post['id'] > $highestId) {
        $highestId = $post['id'];
    }
}
$_SESSION['lastPostId'] = $highestId;

$JSON = json_encode($result);
echo $JSON;
