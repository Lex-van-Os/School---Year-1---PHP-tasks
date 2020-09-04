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
$naam = $_POST["naamvak"];
$ww = $_POST["wwvak"];
$ww_hash = password_hash($ww, PASSWORD_DEFAULT);
$bericht = $_POST["berichtvak"];
$id = $_POST["idvak"];
require_once "Database connection.php";


$users = $conn->prepare("select * from gebruikers, berichten");

$users->execute();

$gevonden = false;
foreach($users as $user){
    if ($naam == $user["gebruikersnaam"]){
        $gevonden = true;
    }
}

if ($gevonden){
    $opdrachten = $conn->prepare("insert into berichten values (:gebruikers_id, null, :bericht)");

    $opdrachten->execute(["bericht" => $bericht,
                            "gebruikers_id" => $id]);
    header("location:Opdracht 9.3.php");
}

?>
