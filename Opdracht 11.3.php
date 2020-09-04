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
$verwijderen = $_POST["verwijdervak"];
require_once 'Database connection.php';

$users = $conn->prepare("select * from gebruikers, berichten");
$users->execute();

foreach ($users as $user) {
    if ($verwijderen) {
        $verwijder = $conn->prepare("delete from gebruikers where id = :id ");
        $verwijder->execute(["id" => $id]);
        $verwijder = $conn->prepare("delete from berichten where gebruikers_id = :id");
        $verwijder->execute(["id" => $id]);
    }
}

?>
</body>
</html>
