<!doctype html>
<?php
session_start()
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6.2</title>
</head>
<body>
<?php
// gegevens ophalen uit het formulier
$naam = $_POST["naamvak"];
$wachtwoord = $_POST["wwvak"];
$ww_hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
require_once "Database connection.php";

$opdrachten = $conn->prepare("select * from gebruikers");

$opdrachten->execute();

$gevonden = false;
foreach($opdrachten as $opdracht) {
    if ($naam == $opdracht["gebruikersnaam"]) {
        if (password_verify($wachtwoord, $ww_hash) == $opdracht["wachtwoord"]) {
            $gevonden = true;
        }
    }
}
    if ($gevonden == true) {
        echo("welkom " . $naam . " Je bent ingelogd. ");
        $_SESSION["ingelogd"] = true;
        header("location:Opdracht 6.3.php");
    } else {
        echo("Verkeerde inlog");
        session_destroy();
    }

    echo "<br>";

?>
</body>
</html>