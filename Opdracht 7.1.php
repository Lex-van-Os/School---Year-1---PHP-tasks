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
if (isset($_SESSION['ingelogd'])) {
    echo("U was al ingelogd");
    header("location:Opdracht 7.3.php");
}
?>

<p>Voor hier uw gegevens in!</p>
<form action="Opdracht%207.2.php" method="post">
    Naam: <input type="text" name="naamvak"> <br/>
    Wachtwoord: <input type="password" name="wwvak">
    <input type="submit">

</body>
</html>