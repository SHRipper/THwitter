<?php
include 'script_connect_db.php';

$username = strtolower($_GET['username']);
$email = strtolower($_GET['email']);
$password = strtolower($_GET['password']);

if ($username == '' or $email == '') {

} else {
    $sql = "SELECT email,username 
            FROM User
            WHERE lower(email)= ? 
            OR lower(username) = ?;";
    $statement = $pdo->prepare($sql);
    if ($statement->execute(array($email, $username))) {
        if ($statement->rowCount() == 0) {
            // insert new user
            $sql_new_user = "INSERT INTO User (
                              username,email,password
                              ) VALUES (
                              ?,?,?
                              );";
            $statement = $pdo->prepare($sql_new_user);
            $statement->execute(array($username, $email, $password));

            // forward to main page
            session_start();
            $_SESSION['username'] = $username;
            echo "<script>window.location='../main/main.php'</script>";
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



