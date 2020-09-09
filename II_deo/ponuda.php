<?php
include_once 'db_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ponuda</title>
</head>
<body>
<form action="ponuda2.php" method="post">
    <label for="cenaVece">Cena od:</label><br>
    <input type="text" id="cenaVece" name="cenaVece"><br>
    <label for="cenaManje">Cena do:</label><br>
    <input type="text" id="cenaManje" name="cenaManje"><br><br>
    <input type="submit" name="submit" value="PRETRAGA" /><br><br>
</form>

<?php
    $sql= "SELECT * FROM proizvodi;";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    echo 'IME PROIZVODA / OPIS PROIZVODA / CENA PROIZVODA <br><br>';
    if($resultCheck > 0){
        while ($row=mysqli_fetch_assoc($result))
            echo $row['ime']." / ".$row['opis']." / ".$row['cena']. "<br>";
    }
?>
</body>
</html>
