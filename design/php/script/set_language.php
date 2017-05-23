<?php
session_start();

if(isset($_GET["lang"]))
{
    $_SESSION["lang"] = $_GET["lang"];
}
else
{
    // Default falls Fehler auftritt
    $_SESSION["lang"] = "german";
}
if(isset($_GET["site"]))
{
    header("Location: ../".$_GET["site"]."/".$_GET["site"].".php");
}
else
{
    // Default falls Fehler auftritt
    header('Location: ../login/login.php');
}

?>