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


<?php
if(isset($_POST['submit']))
{
    $cenaVece = $_POST['cenaVece'];
    $cenaManje = $_POST['cenaManje'];

}


    $sql= "SELECT * FROM proizvodi WHERE cena >= $cenaVece AND cena <= $cenaManje;";
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
