<?php
session_start();
$userId = $_SESSION['user_id'];

header("Content-Type: text/plain");
$request = file_get_contents("php://input");
if (isset($request) && !empty($request)) {
    $requestObj = json_decode($request);
    if ($requestObj->method === "post") {
        $message = $requestObj->m;

        include 'script_connect_db.php';
        $sql = "INSERT INTO Post(sender_id, message) VALUES (?, ?)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array($userId, $message));
        echo "OK";
        return;
    }
}
var_dump(http_response_code(500));
echo "WTF";
?>