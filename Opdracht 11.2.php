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
$id = $_POST["idvak"];
require_once 'Database connection.php';

$opdrachten = $conn->prepare("select * from gebruikers");
$opdrachten->execute();

$gevonden = false;
foreach ($opdrachten as $opdracht) {
    $admin = $opdracht["admin"];
if ($id == $opdracht["id"]) {
        if ($admin == 1) {
            $gevonden = true;
        }
    }
}

if ($gevonden) {
    $users = $conn->prepare("select * from gebruikers, berichten");

    $users->execute();
    echo "<form action='Opdracht%2011.3.php' method='post'>";
    echo " id: <input type='text' name='idvak'>";
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder dit bericht. <br />";
    echo "<input type ='submit'>";
    echo "</form>";
}
?>
</body>
</html>
