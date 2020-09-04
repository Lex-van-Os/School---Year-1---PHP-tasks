<?php
$username = $_POST["naamvak"];
$password = $_POST["passwordvak"];

$usernames = array("Lex", "Peter", "Megan", "Iris");

echo $username . "<br />";

for ($i = 0; $i < count($usernames); $i++) {
    echo $usernames[$i] . "<br />";
}

$gevonden = false;
for ($i = 0; $i < count($usernames); $i++) {
    if ($username == $usernames[$i]) {
        $gevonden = true;
    }
}

if ($gevonden) {
    echo "Fout, naam bestaat al";
} else {
    echo "Succes, account is aangemaakt";
}
?>