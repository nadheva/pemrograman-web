<!DOCTYPE html>
<html>
    <head>
        <title>Function</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <h1>Tugas 7 Function</h1>
    </head>
<?php
require_once "Segitiga.php";
require_once "NFaktorial.php";
require_once "NFaktorialRekursif.php";
require_once "TukarData.php";
require_once "KonversiUang.php";

use tugas7_M3119064\KonversiUang;
use tugas7_M3119064\NFaktorial;
use tugas7_M3119064\Segitiga;
use tugas7_M3119064\NFaktorialRekursif;
use tugas7_M3119064\TukarData;

# 1. Menentukan Menentukan jenis segitiga dari 3 sisi yang diinputkan (segitiga sama sisi, sama kaki, segitiga siku2 atau segitiga sembarang )
echo "1. Menentukan Menentukan Jenis Segitiga <br>";
$segitiga1 = new Segitiga(4,8,9);
$segitiga2 = new Segitiga(4, 4, 4);

# 2. Mencari n faktorial
echo "<br>2. Mencari N Faktorial <br>";
$faktorial1 = new NFaktorial(8);
$faktorial2 = new NFaktorial(9);

# 3. Mencari n faktorial dengan rekursif
echo "<br>3.Mencari N Faktorial dengan Rekursif <br>";
$rekursif1 = new NFaktorialRekursif(9);
$rekursif2 = new NFaktorialRekursif(7);

# 4. Menukar 2 data (boleh berbentuk array)
echo "<br>4. Menukar 2 Data <br>";
$tukardata1 = new TukarData(14, 15);

# 5. Mengubah sebuah data array yang berisi n data uang dolar untuk menjadi n data uang rupiah
echo "<br>5. Konversi Dollar ke Rupiah <br>";
$konversi1 = new KonversiUang([115,122,123]);
$konversi2 = new KonversiUang([133,122,565]);
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
</script>
</html>

