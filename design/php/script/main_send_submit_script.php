starte..
<?php
$userId = "1";//read from cookie
$message = $_POST['text'];
//$message = "nachricht 1 von Main_send_submit_script.php";
echo "Nachricht: ";
echo $message;
echo "Greife auf Datenbank zu";
//TODO  : fehler im Datenbankzugriff finden
$pdo = new PDO("mysql:dbname=THwitterDB;host=localhost", "RubberDuck", "WebProg");
$sql = "insert into Post(sender_id, message, timestamp)
values(?, ?, localtime());";

$statement = $pdo->prepare($sql);
$result->execute(array($userId, $message));
echo "in Datenbank geschrieben"
?>