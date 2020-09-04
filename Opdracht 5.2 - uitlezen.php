<?php
$gebruikersnaam = $_POST ["nv"];
$wachtwoord = $_POST ["wv"];
require_once "Database connection.php";

$opdrachten = $conn->prepare("select * from gebruikers");

$opdrachten->execute();

echo "<ul>";
$gevonden = false;
foreach ($opdrachten as $opdracht) {
    if ($gebruikersnaam == $opdracht["gebruikersnaam"]) {
        $gevonden = true;
    }

}

echo "</ul>";


$ww_hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
$sql1 = "select gebruikersnaam from gebruikers";

$gebruikers = array($sql1);


if ($gevonden = true) {
    echo "Fout, naam bestaat al";
} else {
    $sql = $conn->prepare("
    insert into gebruikers values
    (
    :id, :gebruikersnaam, :wachtwoord
    )
    ");

    $sql->execute([
        "id" => NULL,
        "gebruikersnaam" => $gebruikersnaam,
        "wachtwoord" => $ww_hash
    ]);
    echo "Succes, account is aangemaakt";
}

?>

