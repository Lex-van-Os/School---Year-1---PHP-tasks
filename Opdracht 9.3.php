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
</html>

<?php
require_once "Database connection.php";

$gebruikers = $conn->prepare("select gebruikersnaam, bericht from berichten, gebruikers where berichten.gebruikers_id = gebruikers.id");
$gebruikers->execute();



echo "<table>";
foreach($gebruikers as $gebruiker)
{
    echo "<tr>";
    echo "<td>" . $gebruiker["gebruikersnaam"]             . "</td>";
    echo "<td>" . $gebruiker["bericht"]             . "</td>";
    echo "</tr>";

}
echo "</table>";
?>