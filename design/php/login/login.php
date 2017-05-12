<!DOCTYPE html>
<html>
<head>
	<title>Anmelden</title>
	<link rel="stylesheet" type="text/css" href="/THwitter/design/style/login_registration_style.css">
	<script src="/THwitter/design/js/validate.js"></script>
</head>

<body>
	<header id="login_header">

		<section class="tile" id="section_language">
			<a href="" class="inactive_link" id="language_link">Language</a>
			<ul id="ul_language">
				<li id="li_german">
					<a href="login_mit_ente_deutsch.html">German</a>
				</li>
				<li id="li_english">
					<a href="login_mit_ente_english.html">English</a>
				</li>
				<li id="li_spanish">
					<a href="login_mit_ente_spanish.html">Spanish</a>
				</li>
				<li id="li_french">
					<a href="login_mit_ente_french.html">French</a>
				</li>
			</ul>
		</section>
		<section  class="tile" id="section_about">
			<a href="#" id="about_link">&Uuml;ber</a>
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
			<h2 id="welcome_text">Melde dich an und beginne deine Reise</h2>
		</section>
		
		<section id="login_section">
			<form action="/THwitter/design/php/script/script_login.php" id="login_form" method="post">
				<ul>
					<li>							
						<input id="input_username" class="textbox" placeholder="username" name="input_username" type="text">
					</li>
					<li>
						<input id="input_password" class="textbox" placeholder="password" name="input_password" type="password">
					</li>
					<li id="section_login_register">
							<a class="login_button" onclick="document.getElementById('login_form').submit();">Anmelden</a>
							<section id="register_section">
								<p>oder <a class="register_link" href="/THwitter/design/php/registration/registration.php">registrieren</a></p>
							</section>
					</li>
				</ul>
			</form>
		</section>
		
		<img id="upper_grass" class="grass environment" src="/Thwitter/design/images/grass.png">
		<img id="water"class="environment" src="/Thwitter/design/images/water.png">
		<div id="duck_move_wrapper">
			<img id="duck" src="/Thwitter/design/images/duck_logo.png">
		</div>
		<img class="grass environment" id="lower_grass" src="/Thwitter/design/images/grass.png">
	</main>
	
	<?php
		if (isset($_GET['err']) && $_GET['err'] == 'true'){
			echo "<script>input_error();</script>";
		}
	?>
</body>

</html>