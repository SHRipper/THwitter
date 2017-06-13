<!DOCTYPE html>
<html>
<head>
    <title>Startseite</title>
    <link rel="stylesheet" href="../../style/mainpage_style.css" type="text/css">
    <script language="JavaScript" src="../../js/validate.js"></script>
    <script language="JavaScript" src="../../js/ajax_request.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>

<body>
<?php
session_start();
include '../script/script_language.php';
if(isset($_SESSION["lang"]))
{
    $language = $_SESSION["lang"];
}
else
{
    // Default für Fehlerbehandlung
    $language = "german";
}
?>
<nav id="navigation">
    <ul>
        <li id="startpage" class="tile"><a href="main.php">
                <?php
                    echo $choose_language[$language]["main_nav_mainpage"];
                ?>
            </a></li>
        <li class="tile" id="profilepage"><a href="#">
                <?php
                    echo $choose_language[$language]["main_nav_profile"];
                ?>
            </a></li>
        <li id="signout" class="tile"><a href="../script/script_logout.php">
                <?php
                    echo $choose_language[$language]["main_nav_logout"];
                ?>
            </a></li>
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
        <form id="form_post" action="../script/main_send_submit_script.php" method="get">
            <img id="profilepic" src="../../images/profilbild.jpg"/>
            <textarea id="inputText" name="text" placeholder="<?php
            echo $choose_language[$language]["main_form_hint"];
            ?>"></textarea>
            <input id="button_send"
                   type="button"
                   onclick="validate_post();"
                   value="<?php
                    echo $choose_language[$language]["main_button_sendpost"];
                   ?>">
        </form>
    </section>

    <?php
    include '../script/script_connect_db.php';

    $sql = "SELECT message AS message, username AS author, DATE_FORMAT(DATE_ADD(timestamp, INTERVAL 2 HOUR), '%d.%m.%Y %H:%i') AS time
            FROM Post post
            JOIN User author ON post.sender_id = author.user_id
            ORDER BY timestamp DESC";

    $statement = $pdo->prepare($sql);
    $statement->execute();
    //TODO: Display posts longer than one line
    while ($row = $statement->fetch()) {
        echo "<article>";
        echo "<header class='post_header' > <div class='post_author' '>$row[author]</div> <div class='post_time'> $row[time]</div></header>";
        echo "<section class='post_message'> $row[message]</section>";
        echo "</article>";
    }
    ?>

</main>

<aside id="rightbar">
    <section id="profile_section">
        <img id="profilepic" src=" ../../images/profilbild.jpg"/>
        <p><?php echo $_SESSION['username']; ?></p>
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
