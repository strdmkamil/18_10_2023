<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
    <?php 
   
    ?>
</head>
<body>
    <form action="" method="post">
    ID:<input type="text" name="ID" id="ID" requested>
        Nazwa:<input type="text" name="Nazwa" id="Nazwa" requested>
        <input type="submit" value="Sprawdź" >
        
        <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "debil";

                $polaczenie = mysqli_connect($host, $user, $pass, $db);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $Nazwa = $_POST['Nazwa'];
                    $ID = $_POST['ID'];
                    

                $zapytania = "SELECT * FROM debil WHERE id = '$ID' AND nazwa = '$Nazwa';";
                $wynik = mysqli_query($polaczenie, $zapytania);

                //Testowe dane to ID=1 oraz Nazwa=xpp B))
                if($wynik->num_rows > 0)
                {
                    $row = $wynik->fetch_assoc();
                    echo "<br>" . "ID to: " . $row['ID']. "<br>" .  "Nazwa: " . $row['nazwa'];
                }
                else {
                    echo "<br>" ."Brak danych dla podanych ID i nazwy";
                }

                
            }
                ?>
    </form>
    
</body>
</html>