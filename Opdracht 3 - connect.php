
<?php
$servername = "localhost";
$dbname = "php opdracht 3";
$username = "root";
$password = "";

try
{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectie gelukt <br />";
}
catch(PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}

require_once "Opdracht 3 - connect.php";

$gebruikers = $conn->prepare("select * from gebruikers");

$gebruikers->execute();

echo "<ul>";
foreach ($gebruikers as $gebruiker)
{
    echo "<li>" . $gebruiker["id"]             . "</li>";
    echo "<li>" . $gebruiker["gebruikersnaam"]             . "</li>";
    echo "<li>" . $gebruiker["wachtwoord"]             . "</li><br>";
}
echo "</ul>"
?>
