<?php
session_start();
include '../script/script_connect_db.php';

$sql = "SELECT post_id AS id, message AS message, username AS author, DATE_FORMAT(DATE_ADD(timestamp, INTERVAL 2 HOUR), '%d.%m.%Y %H:%i') AS time
            FROM Post post
            JOIN User author ON post.sender_id = author.user_id
            ORDER BY timestamp DESC";

$statement = $pdo->prepare($sql);
$statement->execute();
//TODO: Display posts longer than one line
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

$highestId = -1;
foreach($result AS $post) {
    if ($post['id'] > $highestId) {
        $highestId = $post['id'];
    }
}
$_SESSION['lastPostId'] = $highestId;

$JSON=json_encode($result);
echo $JSON;
?>