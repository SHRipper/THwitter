<!DOCTYPE html>
<html>
<head>
    <title>Startseite</title>
    <link rel="stylesheet" href="../../style/mainpage_style.css" type="text/css">
</head>

<body>

<nav id="navigation">
    <ul>
        <li class="tile" id="startpage"><a href="main.php">Startseite</a></li>
        <li class="tile" id="profilepage"><a href="#">Profil</a></li>
        <li id="signout" class="tile"><a href="../login/login.php">Abmelden</a></li>
    </ul>

    <img src="../../images/duck_logo.png" id="logo">

</nav>
<section id="header_shadow"></section>


<aside id="leftbar">
    <img class="ad" src="../../images/justPicture1.jpg"/>
    <img class="ad" src="../../images/justPicture2.jpg"/>
</aside>

<main>

    <section id="post">
        <form action="../script/main_send_submit_script.php" method="post">
            <img id="profilepic" src="../../images/profilbild.jpg"/>
            <textarea id="inputText" name="text" placeholder="Enter text here."></textarea>
            <input id="button_send" type="submit" value="Senden">
        </form>
    </section>

    <?php
    $pdo = new PDO("mysql:dbname=THwitterDB;host=duck.servebeer.com", "RubberDuck", "WebProg");
    $sql = "SELECT * FROM Post p ORDER By p.timestamp DESC;";
    $statement = $pdo->prepare($sql);
    $statement->execute();

    while ($row = $statement->fetch()) {
        echo "<article>" . $row["message"] . "</article>";
    }
    ?>

</main>

<aside id="rightbar">
    <section id="profile_section">
        <img id="profilepic" src=" ../../images/profilbild.jpg"/>
        <p>Hans Vader</p>
    </section>
    <hr/>
    <section id="trend_section">
        <h3> Trend </h3>
        <ul id="trend_list">
            <li><a href="nummer1">#nummer1</a></li>
            <li><a href="nummer2">#nummer2</a></li>
            <li><a href="nummer3">#nummer3</a></li>
        </ul>
    </section>
</aside>


</body>

</html>
