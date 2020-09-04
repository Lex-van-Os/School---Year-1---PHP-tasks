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
    <title>Document</title>
</head>
<body>
<?php
require_once "Database connection.php";

$opdrachten = $conn->prepare("select * from gebruikers");

$opdrachten->execute();

echo "<table>";
foreach ($opdrachten as $opdracht) {
    echo "<tr>";
    echo "<td>" . $opdracht["id"] . "</td>";
    echo "<td>" . $opdracht["gebruikersnaam"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>

