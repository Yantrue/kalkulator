<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
</head>
<body>

<h2>Kalkulator</h2>

<form method="post">
    <input type="text" name="angka1" placeholder="Masukkan angka 1"><br><br>
    <input type="text" name="angka2" placeholder="Masukkan angka 2"><br><br>

    <select name="operasi">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float) $_POST["angka1"];
    $b = (float) $_POST["angka2"];
    $op = $_POST["operasi"];
    $hasil = 0;

    if ($op == "+") {
        $hasil = $a + $b;
    } elseif ($op == "-") {
        $hasil = $a - $b;
    } elseif ($op == "*") {
        $hasil = $a * $b;
    } elseif ($op == "/") {
        if ($b == 0) {
            echo "Tidak bisa dibagi 0";
            exit;
        }
        $hasil = $a / $b;
    }

    echo "<h3>Hasil: $hasil</h3>";
}
?>

</body>
</html>
