<?php
function throw_login_error()
{
    echo "<script>
		window.location='../login/login.php?err=true';
		</script>";
    die();
}

function throw_username_exists_error()
{
    echo "<script>
		window.location='../registration/registration.php?err=user';
		</script>";
    die();
}

function throw_email_exists_error()
{
    echo "<script>
		window.location='../registration/registration.php?err=email';
		</script>";
    die();
}