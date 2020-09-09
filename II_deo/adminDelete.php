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
    $red = $_POST['red'];

}

$sql="DELETE FROM proizvodi WHERE proizvod_id = $red;";
mysqli_query($conn, $sql);

echo"Red je obrisan iz tabele!";

?>
</body>
</html>
