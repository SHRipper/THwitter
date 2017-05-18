<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../../style/login_registration_style.css">
    <script language="JavaScript" src="../../js/validate.js"></script>
</head>

<body onload="enter_listener();">
<header id="login_header">
    <?php
    include '../script_language.php';
    if (isset($_GET['lang'])) {
        $language = $_GET["lang"];
    } else {
        $language = "german";
    }
    ?>
    <section class="tile" id="section_language">
        <a href="" class="inactive_link" id="language_link">Language</a>
        <ul id="ul_language">
            <li id="li_german">
                <form id="registration_form_german" method="get" action="registration.php">
                    <input type="hidden" name="lang" value="german" style="display: none">
                    <a onclick="document.getElementById('registration_form_german').submit();">Deutsch</a>
                </form>
            </li>
            <li id="li_english">
                <form id="registration_form_english" method="get" action="registration.php">
                    <input type="hidden" name="lang" value="english" style="display: none">
                    <a onclick="document.getElementById('registration_form_english').submit();">English</a>
                </form>
            </li>
            <li id="li_spanish">
                <form id="registration_form_spanish" method="get" action="registration.php">
                    <input type="hidden" name="lang" value="spanish" style="display: none">
                    <a onclick="document.getElementById('registration_form_spanish').submit();">Spanish</a>
                </form>
            </li>
            <li id="li_french">
                <form id="registration_form_french" method="get" action="registration.php">
                    <input type="hidden" name="lang" value="french" style="display: none">
                    <a onclick="document.getElementById('registration_form_french').submit();">French</a>
                </form>
            </li>
        </ul>
    </section>
    <section class="tile" id="section_about">
        <a href="" id="about_link">
            <?php
            echo $choose_language[$language]["about"];
            ?>
        </a>
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
            echo $choose_language[$language]["registration_welcome"];
            ?>
        </h2>
    </section>

    <section id="login_section">
        <form id="login_form" action="../script/script_register.php" method="get">
            <ul>
                <li>
                    <!-- only visible on certain event -->
                    <label class="error_desc" id="user_exists_error">
                        <?php
                        echo $choose_language[$language]["registration_error_user"];
                        ?>
                    </label>
                </li>
                <li>
                    <input class="textbox" id="input_username" placeholder="username" name="username" type="text">
                </li>
                <li>
                    <!-- only visible on certain event -->
                    <label class="error_desc" id="email_exists_error">
                        <?php
                        echo $choose_language[$language]["registration_error_email"];
                        ?>
                    </label>
                </li>
                <li>
                    <input class="textbox" id="input_email" placeholder="email" name="email" type="text">
                </li>
                <li>
                    <!-- only visible on certain event -->
                    <label class="error_desc" id="pw_no_match_error">
                        <?php
                        echo $choose_language[$language]["registration_error_pw"];
                        ?>
                    </label>
                </li>
                <li>
                    <input class="textbox" id="input_password" placeholder="password" name="password" type="password">
                </li>
                <li>
                    <input class="textbox" id="input_password_confirm" placeholder="confirm password" type="password">
                </li>
                <li id="section_login_register">
                    <a class="login_button"
                       onclick="validate_register_input();">Registrieren</a>
                    <section id="register_section">
                        <p>
                            <?php
                            echo $choose_language[$language]["or"];
                            ?>
                            <a class="register_link" href="../login/login.php">anmelden</a>
                        </p>
                    </section>
                </li>
            </ul>
        </form>
    </section>
    <section id="divider"></section>
    <section id="agb_section">
        <p id="register_agb">By signing up, you agree to the Terms of Service and Privacy Policy, including Cookie Use.
            Others will be able to find you by searching for your email address. Also we are saving your password in
            plaintext.</p>
    </section>

    <img id="upper_grass" class="grass environment" src="../../images/grass.png">
    <img id="water" class="environment" src="../../images/water.png">
    <div id="duck_move_wrapper">
        <img id="duck" src="../../images/duck_logo.png">
    </div>
    <img class="grass environment" id="lower_grass" src="../../images/grass.png">
</main>

<?php
if (isset($_GET['err'])) {
    $error_type = $_GET['err'];
    echo "<script>register_error('" . $error_type . "');</script>";
}
?>
</body>

</html>