<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/Thwitter/design/style/login_registration_style.css">
</head>

<body>
<header id="login_header">
    <section class="tile" id="section_language">
        <a href="" class="inactive_link" id="language_link">Sprache</a>
        <ul id="ul_language">
            <li id="li_german">
                <a href="registration_mit_ente_deutsch.html">German</a>
            </li>
            <li id="li_english">
                <a href="registration_mit_ente_english.html">English</a>
            </li>
            <li id="li_spanish">
                <a href="registration_mit_ente_spanish.html">Spanish</a>
            </li>
            <li id="li_french">
                <a href="registration_mit_ente_french.html">French</a>
            </li>
        </ul>
    </section>
    <section  class="tile" id="section_about">
        <a href="" id="about_link">&Uuml;ber</a>
    </section>

    <section id="header_wrapper">
        <img id="logo" src="/Thwitter/design/images/duck_logo.png" alt="[THwitter logo]">
        <section id="site_name_wrapper">
            <h1 id="site_name">THwitter</h1>
        </section>
    </section>
</header>
<section id="header_shadow"></section>
<main>
    <section id="welcome_text_wrapper">
        <h2 id="welcome_text">Registriere dich jetzt und gewinne einen Toaster</h2>
    </section>

    <section id="login_section">
        <form id="login_form">
            <ul>
                <li>
                    <input class="textbox" placeholder="username" name="input_username" type="text">
                </li>
                <li>
                    <input class="textbox" placeholder="email" name="input_email" type="text">
                </li>
                <li>
                    <input class="textbox" placeholder="password" name="input_password" type="password">
                </li>
                <li>
                    <input class="textbox" placeholder="confirm password" name="input_password_confirm" type="password">
                </li>
                <li id="section_login_register">
                    <a class="login_button" href="">Registrieren</a>
                    <section id="register_section">
                        <p>oder <a class="register_link" href="login_mit_ente_deutsch.html">anmelden</a></p>
                    </section>
                </li>
            </ul>
        </form>
    </section>
    <section id="divider"></section>
    <section id="agb_section">
        <p id="register_agb">By signing up, you agree to the Terms of Service and Privacy Policy, including Cookie Use. Others will be able to find you by searching for your email address. Also we are saving your password in plaintext.</p>
    </section>

    <img id="upper_grass" class="grass environment" src="/Thwitter/design/images/grass.png">
    <img id="water"class="environment" src="/Thwitter/design/images/water.png">
    <div id="duck_move_wrapper">
        <img id="duck" src="/Thwitter/design/images/duck_logo.png">
    </div>
    <img class="grass environment" id="lower_grass" src="/Thwitter/design/images/grass.png">
</main>
</body>

</html>