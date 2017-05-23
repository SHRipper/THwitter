starte..

<?php
session_start();
?>

<?php
$userId = $_SESSION['user_id'];//read from session
$message = $_POST['text'];
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