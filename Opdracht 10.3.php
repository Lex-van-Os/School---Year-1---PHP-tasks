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
$verwijderen    = $_POST["verwijdervak"];
$berichtid = $_POST["berichtidvak"];
require_once "Database connection.php";

if($verwijderen){
$opdrachten = $conn->prepare("delete from berichten where id = :id ");

$opdrachten->execute(["id" => $berichtid]);

echo "Het bericht is verwijderd";}
else{
    echo "Het bericht is niet verwijderd";
}

?>