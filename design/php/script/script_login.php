<?php
include 'script_errors.php';
session_start();

if ($_GET['username'] == '' or $_GET['password'] == '') {
    debug("one field not written");
    throw_login_error();
} else {
    $username = $_GET['username'];
    $password = $_GET['password'];

    include 'script_connect_db.php';

    $sql = "SELECT username FROM User WHERE lower(username) = lower(?) AND password = ?";
    $statement = $pdo->prepare($sql);
    if ($statement->execute(array($username, $password))) {

        if ($statement->rowCount() == 0) {
            throw_login_error();

        }
        //get userID from username
        $sql = "SELECT user_id
                From User user
                WHERE username = ?;";
        $statement = $pdo->prepare($sql);
        $statement->execute(array($username));
        $row = $statement->fetch();

        // data exists for given username
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row['user_id'];
        echo "<script>window.location='../main/main.php'</script>";
    } else {
        // error while executing the statement
        debug("error my frieeend");
    }
    die();
}

function debug($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

?>

