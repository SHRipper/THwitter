<?php
echo "hallo";
	if ($_POST['input_username'] == '' or $_POST['input_password'] == ''){
		echo "<script>
		window.location='/THwitter/design/php/login/login.php?err=true';
		</script>";
		die();
	}else{
	    /*
        $host = "localhost";
        $username = "RubberDuck";
        $password = "WebProg";
        $conn = new PDO("mysql:dbname=THwitterDB;host=$host", $username, $password);
        echo "asdlfja";
    }
        */
                $mysqli = new mysqli("localhost","RubberDuck","WebProg","THwitterDB");
                $mysqli->set_charset("utf8");
                if ($mysqli->connect_errno) {
                    die("Verbindung zur MySQL Datenbank fehlgeschlagen.");
                }

                $sql = "select password from user where email = ".$_POST['input_username'].";";
                $res = $mysqli->query($sql);
                $row = $res->fetch_assoc();
                $user_password = $row['password'];
                if ($user_password == $_POST['input_password']){
                    echo "<script>window.location='/THwitter/design/php/main/main.php'</script>";
                }else{
                    echo "<script>window.location='/THwitter/design/php/login/login.php'</script>";
                }
                $res->free();
                echo "hallo" . $row['user_id'] . " " . $row['username'];
            }

?>