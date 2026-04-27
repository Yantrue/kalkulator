<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
</head>
<body>

<h2>Kalkulator Sederhana</h2>

<form method="post">
    Angka 1:
    <input type="number" name="angka1" required><br><br>

    Angka 2:
    <input type="number" name="angka2" required><br><br>

    Operasi:
    <select name="operasi">
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
    </select><br><br>

    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
if(isset($_POST['hitung'])){
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    $op = $_POST['operasi'];

    if($op == "tambah"){
        $hasil = $a + $b;
    } elseif($op == "kurang"){
        $hasil = $a - $b;
    } elseif($op == "kali"){
        $hasil = $a * $b;
    } elseif($op == "bagi"){
        if($b != 0){
            $hasil = $a / $b;
        } else {
            echo "Tidak bisa bagi dengan 0";
            exit;
        }
    }

    echo "<h3>Hasil: $hasil</h3>";
}
?>

</body>
</html>
