<!doctype html>
<?php
session_start()
?>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
</head>
<body>
<?php
$naam = $_POST["naamvak"];
$wachtwoord = $_POST["wwvak"];
$ww_hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
// tabel uitlezen en netjes afdrukken --------------------------------
require_once "Database connection.php";

$opdrachten = $conn->prepare("select * from gebruikers");

$opdrachten->execute();

$gevonden = false;
foreach ($opdrachten as $opdracht) {
    $admin = $opdracht["admin"];
    echo $opdracht["admin"];
    if ($admin == 1) {
        if (password_verify($wachtwoord, $ww_hash) == $opdracht["wachtwoord"]) {
            if ($naam == $opdracht["gebruikersnaam"]) {
                $gevonden = true;
            }
        }
    }
}

if ($gevonden == true) {
    echo("welkom " . $naam . " Je bent ingelogd. ");
    $_SESSION["ingelogd"] = true;
    header("location:Opdracht 7.3.php");
} else {
    echo("Verkeerde inlog");
    session_destroy();
}
?>

</body>
</html>