<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "twoja_nazwa_uzytkownika";
$password ="twoje_haslo";
$dbname = "nazwa_bazy_danych";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą daych: ". $conn->connect_error);

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];

}
$sql = "INSERT INTO twoja_tabela (imie, nazwisko, email) VALUES ('$imie', '$nazwisko', '$email')";
   
   if ($conn->query($sq1) === TRUE) {
    echo "Nowy wiersz został dodany poprawnie.";
    } else {
        echo "Błąd podczas dodawania nowego wiersza: " . $conn->error;
}
$conn->close();
?>
 
</body>
</html>
