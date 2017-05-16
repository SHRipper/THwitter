<?php
include 'script_connect_db.php';

$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];

if ($username == '' or $email == '') {

} else {
    $sql = "SELECT email,username FROM User WHERE lower(email)= lower(?) OR lower(username) = lower(?);";
    $statement = $pdo->prepare($sql);
    if ($statement->execute(array($email, $username))) {
        if ($statement->rowCount() == 0) {
            // insert new user
            echo "insert new user";
        } else {
            // user or email already exists
            $row = $statement->fetch();
            include 'script_errors.php';
            if (strtolower($row['username']) == strtolower($username)) {
                throw_username_exists_error();
            }
            if (strtolower($row['email']) == strtolower($email)) {
                throw_email_exists_error();
            }
        }
    } else {
        // something went wrong with executing
    }
}



