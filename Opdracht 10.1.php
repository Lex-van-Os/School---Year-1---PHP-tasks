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

<p> Welk bericht wilt u verwijderen? </p>
<form action="Opdracht%2010.2.php" method="post">
    Id Bericht: <input type="text" name="berichtidvak"> <br/>
    <p>Voer uw gebruikersid in</p>
    Id gebruiker: <input type="text" name="gebruikersidvak">
    <input type="submit">

</body>
</html>