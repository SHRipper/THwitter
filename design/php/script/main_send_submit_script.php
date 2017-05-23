starte..
<?php
$userId = "1";//read from cookie
$message = $_POST['text'];
//$message = "nachricht 1 von Main_send_submit_script.php";
echo "Nachricht: ";
echo $message;
echo "Greife auf Datenbank zu";
include 'script_connect_db.php';

$sql = "INSERT INTO Post(sender_id, message) VALUES (?, ?)";
$statement = $pdo->prepare($sql);
$statement->execute(array($userId, $message));
echo "in Datenbank geschrieben";
echo "<script>window.location='../main/main.php'</script>";

?>