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
    $id1 = $_POST['id1'];
    $id2 = $_POST['id2'];
    $ime = $_POST['ime'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
}

$sql="UPDATE proizvodi SET proizvod_id = $id2, ime ='$ime', opis ='$opis', cena = $cena WHERE proizvod_id = $id1;";
mysqli_query($conn, $sql);

echo"Podaci su promenjeni!";

?>
</body>
</html>
