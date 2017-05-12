<!DOCTYPE html>
<html>
<head>
    <title>Startseite</title>
    <link rel="stylesheet" href="/THwitter/design/style/mainpage_style.css" type="text/css">
</head>

<body>

<?php
$host = "localhost";
$username = "RubberDuck";
$password = "WebProg";
$conn = new PDO("mysql:dbname=;host=$host", $username, $password);
?>

<nav id="navigation">
    <ul>
        <li class="tile" id="startpage"><a href="/THwitter/design/php/main/main.php">Startseite</a></li>
        <li class="tile" id="profilepage"><a href="#">Profil</a></li>
        <li id="signout" class="tile"><a href="/THwitter/design/php/login/login.php">Abmelden</a></li>
    </ul>
    <section id="logo_section">
        <img src="/THwitter/design/images/duck_logo.png" id="logo">
    </section>
</nav>
<section id="header_shadow"></section>


<aside id="leftbar">
    <img class="ad" src="/THwitter/design/images/justPicture1.jpg"/>
    <img class="ad" src="/THwitter/design/images/justPicture2.jpg"/>
</aside>

<main>
    <section id="post">
        <form>
            <img id="profilepic" src="/THwitter/design/images/profilbild.jpg"/>
            <textarea id="inputText" name="text" placeholder="Enter text here."></textarea>
            <input id="button_send" type="submit" value="Senden">
        </form>
    </section>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>
    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>
    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>
    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

    <article>
        Das ist ein toller Beitrag
    </article>

</main>

<aside id="rightbar">
    <section id="profile_section">
        <img id="profilepic" src="/THwitter/design/images/profilbild.jpg"/>
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
