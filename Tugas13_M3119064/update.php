<?php
include_once("database.php");

$id = $_POST['id_produk'];
$nama = $_POST['nama_produk'];
$brand = $_POST['brand'];
$deskripsi = $_POST['deskripsi_produk'];
$stok = $_POST['stok_produk'];
$harga = $_POST['harga_produk'];

$query="UPDATE tb_produk SET nama='$nama', brand='$brand', deskripsi='$deskripsi', stok='$stok', harga='$harga' WHERE tb_produk.id_produk=$id";
$hasil=mysqli_query($koneksi1, $query);

if($hasil==1) {
    header('Location:produk.php');
} else {
    echo "Edit Produk Gagal!";
}
?>