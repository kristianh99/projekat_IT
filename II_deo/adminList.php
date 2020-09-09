<?php
include_once 'db_config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEW</title>
</head>
<body>
<?php
$sql= "SELECT * FROM proizvodi;";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
echo 'ID PROIZVODA / IME PROIZVODA / OPIS PROIZVODA / CENA PROIZVODA <br><br>';
if($resultCheck > 0){
    while ($row=mysqli_fetch_assoc($result))
        echo $row['proizvod_id']." / ".$row['ime']." / ".$row['opis']." / ".$row['cena']. "<br>";
}




?>
</body>
</html>
