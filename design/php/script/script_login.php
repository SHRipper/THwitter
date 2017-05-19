Login script:
<?php
include 'script_errors.php';
session_start();
echo "session gestartet";
if ($_GET['username'] == '' or $_GET['password'] == '') {
    debug("one field not written");
    throw_login_error();
} else {
    $username = $_GET['username'];
    $password = $_GET['password'];

    include 'script_connect_db.php';
    echo "greife auf datenbank zu";
    $sql = "SELECT username FROM User WHERE lower(username) = lower(?) AND password = ?";
    $statement = $pdo->prepare($sql);
    if ($statement->execute(array($username, $password))) {

        if ($statement->rowCount() == 0) {
            throw_login_error();
        }

        // data exists for given username
        $_SESSION['username'] = $username;
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

