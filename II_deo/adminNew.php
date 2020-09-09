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
if(isset($_POST['submit']))
{
$ime = $_POST['ime'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
}

$sql="INSERT INTO proizvodi (ime, opis, cena) VALUES ('$ime', '$opis', '$cena');";
mysqli_query($conn, $sql);

echo"Unet je novi red u tabelu!";

?>
</body>
</html>