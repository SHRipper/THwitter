<?php
include '../script/script_connect_db.php';
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];

if ($username = '' or $_GET['email']) {

} else {

    $sql = "SELECT * FROM User WHERE lower(email)= lower(?) OR lower(username) = lower(?)";
    $statement = $pdo->prepare($sql);
    if ($statement->execute($email, $username)) {
        if ($statement->rowCount() != 0) {
            // insert new user

        } else {
            // user or email already exists
        }
    } else {
        // something went wrong with executing
    }
}

