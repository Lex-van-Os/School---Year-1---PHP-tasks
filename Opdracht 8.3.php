<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html><?php
$id = $_POST["gebruikeridvak"];
$gebruikersnaam = $_POST["gebruikersvak"];
$wachtwoord = $_POST["wachtwoordvak"];


require_once "Database connection.php";

$sql = $conn->prepare
("
update gebruikers set    gebruikersnaam     = :gebruikersnaam,
                    wachtwoord    = :wachtwoord
                    where   id = :id
                    ");

$sql->execute
([
    "id" => $id,
    "gebruikersnaam" => $gebruikersnaam,
    "wachtwoord" => $wachtwoord,
]);

echo "De gegevens zijn gewijzigd, <br />";
?>