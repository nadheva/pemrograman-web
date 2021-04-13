<?php
    require('database.php');
    $id=$_GET['id_produk'];
    $query="SELECT * FROM tb_produk WHERE id_produk='$id'";
    $hasil=mysqli_query($koneksi1,$query);
?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <title>Detail Produk</title>
  </head>
  <body>
    <h1>Detail Produk</h1>
    <?php while($row=mysqli_fetch_array($hasil)) {?>
    <?php 
    echo $row['id_produk'];
    echo $row['nama'];
    echo $row['brand'];
    echo $row['deskripsi'];
    echo $row['stok'];
    echo $row['harga'];     
    ?>
    <a href="index.php?target=produk">Kembali</a>
    <?php } ?>
    </body>
</html>