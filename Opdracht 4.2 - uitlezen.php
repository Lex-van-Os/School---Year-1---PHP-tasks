<?php
$servername = "localhost";
$dbname = "php opdracht 3";
$username = "root";
$password = "";

try
{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectie gelukt <br />";
}
catch(PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}

$gebruikersnaam = $_POST ["nv"];
$wachtwoord = $_POST ["wv"];
$ww_hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

$sql = $conn->prepare("
    insert into gebruikers values
    (
    :id, :gebruikersnaam, :wachtwoord
    )
    ");

$sql->execute([
    "id"    =>  NULL,
    "gebruikersnaam"           => $gebruikersnaam,
    "wachtwoord"           => $ww_hash
    ]);

echo "Gebruiker toegevoegd";
?>

