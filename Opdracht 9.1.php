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

<p>Voor hier uw gegevens in!</p>
<form action="Opdracht%209.2.php" method="post">
    Naam: <input type="text" name="naamvak"> <br/>
    Id: <input type="text" name="idvak">
    Wachtwoord: <input type="password" name="wwvak">
    Bericht: <input type="text" name="berichtvak">
    <input type="submit">

</body>
</html>