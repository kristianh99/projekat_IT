<?php
include_once 'db_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<h3>NEW</h3>
<form action="adminNew.php" method="post">
    <label for="ime">Ime proizvoda: </label>
    <input type="text" id="ime" name="ime"><br>
    <label for="opis">Opis proizvoda: </label>
    <input type="text" id="opis" name="opis"><br>
    <label for="cena">Cena proizvoda: </label>
    <input type="number" id="cena" name="cena"><br>
    <input type="submit" name="submit" value="UNESI PODATKE" /><br><br>
</form>
<br>
<h3>UPDATE</h3>
<form action="adminUpdate.php" method="post">
    <label for="id1">Red koji se menja(ID): </label>
    <input type="number" id="id1" name="id1"><br>
    <label for="id2">Novi ID: </label>
    <input type="number" id="id2" name="id2"><br>
    <label for="ime">Novo ime proizvoda: </label>
    <input type="text" id="ime" name="ime"><br>
    <label for="opis">Novi opis proizvoda: </label>
    <input type="text" id="opis" name="opis"><br>
    <label for="cena">Nova cena proizvoda: </label>
    <input type="number" id="cena" name="cena"><br>
    <input type="submit" name="submit" value="UNESI PODATKE" /><br><br>
</form>
<br>
<h3>DELETE</h3>
<form action="adminDelete.php" method="post">
    <label for="red">Red koji se briše(ID): </label>
    <input type="number" id="red" name="red"><br>
    <input type="submit" name="submit" value="OBRIŠI" /><br><br>
</form>
<br>
<h3>LIST</h3>
<button><a href="adminList">Listaj</a></button>
</body>
</html>