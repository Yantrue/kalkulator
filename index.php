<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>

<h2>Kalkulator</h2>

<form method="POST">
    <input type="number" name="a" placeholder="Angka 1" required><br><br>
    <input type="number" name="b" placeholder="Angka 2" required><br><br>

    <button name="tambah">+</button>
    <button name="kurang">-</button>
    <button name="kali">*</button>
    <button name="bagi">/</button>
</form>

<?php
if(isset($_POST['tambah'])){
    echo "Hasil: " . ($_POST['a'] + $_POST['b']);
}
if(isset($_POST['kurang'])){
    echo "Hasil: " . ($_POST['a'] - $_POST['b']);
}
if(isset($_POST['kali'])){
    echo "Hasil: " . ($_POST['a'] * $_POST['b']);
}
if(isset($_POST['bagi'])){
    if($_POST['b'] == 0){
        echo "Tidak bisa bagi 0";
    } else {
        echo "Hasil: " . ($_POST['a'] / $_POST['b']);
    }
}
?>

</body>
</html>
