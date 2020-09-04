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
$berichtid = $_POST["berichtidvak"];
$gebruikersid = $_POST["gebruikersidvak"];
require_once "Database connection.php";


$users = $conn->prepare("select * from gebruikers, berichten");

$users->execute();

$gevonden = false;
foreach($users as $user){
    if ($gebruikersid == $user["gebruikers_id"]){
        $gevonden = true;
    }
}

if ($gevonden){
    $opdrachten = $conn->prepare("select * from gebruikers, berichten");

    $opdrachten->execute();
echo "<form action='Opdracht%2010.3.php' method='post'>";
echo "<input type='hidden' name='berichtidvak' value=$berichtid>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder dit bericht. <br />";
echo "<input type ='submit'>";
echo "</form>";
}

?>
