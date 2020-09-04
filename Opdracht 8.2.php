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
<?php
$id = $_POST ["gebruikeridvak"];

require_once "Database connection.php";

$gebruikers = $conn->prepare("select * from gebruikers where id = :id");
$gebruikers->execute(["id" => $id]);

// autogegevens in een nieuw formulier laten zien ------------------------
echo "<form action='Opdracht%208.3.php' method='post'>";
foreach ($gebruikers as $gebruiker) {
// klantid mag niet gewijzigd worden
    echo " id:" . $gebruiker["id"];
    echo " <input type='hidden' name='gebruikeridvak'";
    echo " value=' " . $gebruiker["id"] . " '> <br />";

    echo " gebruikersnaam: <input type='text' ";
    echo " name = 'gebruikersvak'";
    echo " value = '" . $gebruiker["gebruikersnaam"] . "'";
    echo " > <br />";

    echo " wachtwoord: <input type='text' ";
    echo " name = 'wachtwoordvak'";
    echo " value = '" . $gebruiker["wachtwoord"] . "'";
    echo " > <br />";

}

echo "<input type='submit'>";
echo "</form>";

?>
</body>
</html>
