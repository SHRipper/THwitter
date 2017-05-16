<?php

if ($_GET["username"] == '' or $_GET["password"] == '') {
    debug("one field not written");
    return_with_error();
} else {
    $username = $_GET["username"];
    $password = $_GET["password"];

    include 'script_connect_db.php';

    $sql = "SELECT username FROM User WHERE lower(username) = lower(?) AND password = ?";
    $statement = $pdo->prepare($sql);
    if ($statement->execute(array($username, $password))) {

        if ($statement->rowCount() == 0) {
            return_with_error();
        }

        // data exists for given username
        echo "<script>window.location='/THwitter/design/php/main/main.php'</script>";
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

function return_with_error()
{
    echo "<script>
		window.location='/THwitter/design/php/login/login.php?err=true';
		</script>";
    die();
}
