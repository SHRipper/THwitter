<!DOCTYPE html>
<html>
<head>
    <title>Anmelden</title>
    <link rel="stylesheet" type="text/css" href="../../style/login_registration_style.css">
    <script src="../../js/validate.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?php include '../script/script_session.php'; ?>

</head>
<body>
<header id="login_header">
    <?php
    include '../script/script_language.php';
    if (isset($_SESSION['lang'])) {
        $language = $_SESSION["lang"];
    } else {
        // Default falls Fehler auftritt
        $language = "german";
    }
    ?>
    <section class="tile" id="section_language">
        <a href="" class="inactive_link" id="language_link">Language</a>
        <ul id="ul_language">
            <li id="li_german">
                <a href="../script/set_language.php?lang=german&site=login">Deutsch</a>
            </li>
            <li id="li_english">
                <a href="../script/set_language.php?lang=english&site=login">English</a>
            </li>
            <li id="li_spanish">
                <a href="../script/set_language.php?lang=spanish&site=login">Spanish</a>
            </li>
            <li id="li_french">
                <a href="../script/set_language.php?lang=french&site=login">French</a>
            </li>
        </ul>
    </section>
    <section class="tile" id="section_about">
        <a href="#" id="about_link">
            <?php
            echo $choose_language[$language]["about"];
            ?></a>
    </section>

    <section id="header_wrapper">
        <img id="logo" src="../../images/duck_logo.png" alt="[THwitter logo]">
        <section id="site_name_wrapper">
            <h1 id="site_name">THwitter</h1>
        </section>
    </section>

</header>
<section id="header_shadow"></section>
<main>
    <section id="welcome_text_wrapper">
        <h2 id="welcome_text">
            <?php
            echo $choose_language[$language]["welcome"];
            ?>
            </a></h2>
    </section>

    <section id="login_section">
        <form action="../script/script_login.php" id="login_form" method="get">
            <ul>
                <li>
                    <label class="error_desc" id="login_error_notify">
                        <?php
                        echo $choose_language[$language]["input_error"];
                        ?>
                    </label>
                </li>
                <li>
                    <input id="input_username" class="textbox" placeholder="username" name="username" type="text">
                </li>
                <li>
                    <input id="input_password" class="textbox" placeholder="password" name="password" type="password">
                </li>
                <li id="section_login_register">
                    <a class="login_button" onclick="document.getElementById('login_form').submit();">
                        <?php
                        echo $choose_language[$language]["login_button"];
                        ?>
                    </a>
                    <section id="register_section">
                        <p>
                            <?php
                            echo $choose_language[$language]["or"];
                            ?>
                            <a class="register_link" href="../registration/registration.php">
                                <?php
                                echo $choose_language[$language]["register_link"];
                                ?>
                            </a>
                        </p>
                    </section>
                    <!-- invisible button to submit the form on return click -->
                    <input type="submit" style="display:none"/>
                </li>
            </ul>
        </form>
    </section>

    <img id="upper_grass" class="grass environment" src="../../images/grass.png">
    <img id="water" class="environment" src="../../images/water.png">
    <div id="duck_move_wrapper">
        <img id="duck" src="../../images/duck_logo.png">
    </div>
    <img class="grass environment" id="lower_grass" src="../../images/grass.png">
</main>

<?php
if (isset($_GET['err']) && $_GET['err'] == 'true') {
    echo "<script>login_error();</script>";
}
?>
</body>

</html>