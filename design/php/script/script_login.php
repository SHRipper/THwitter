<?php

if ($_GET["username"] == '' or $_GET["password"] == '') {
    debug("one field not written");
    return_with_error();
} else {
    $username = $_GET["username"];
    $password = $_GET["password"];

    // connection to use when running on the server
    //$pdo = new PDO("mysql:dbname=THwitterDB;host=localhost", "RubberDuck", "");

    // debug connection to local database
    $pdo = new PDO("mysql:dbname=thwitterdb;host=localhost", "root", "");

    $sql = "SELECT password FROM User where lower(username) = ?";
    $statement = $pdo->prepare($sql);
    if ($statement->execute(array(strtolower($username)))) {

        if ($statement->rowCount() == 0){
            return_with_error();
        }else {
            // data exists for given username
            $row = $statement->fetch();
            debug("statement correct. row: " . $row['password']);
            if ($row['password'] == $password) {
                echo "<script>window.location='/THwitter/design/php/main/main.php'</script>";
            } else {
                echo "<script>window.location='/THwitter/design/php/login/login.php'</script>";
            }
        }
        $statement->free();
    }else{
        // error while executing the statement
        debug("error my frieeend");
    }
    die();
}

function debug( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function return_with_error(){
    echo "<script>
		window.location='/THwitter/design/php/login/login.php?err=true';
		</script>";
    die();
}
