<?php 
    header("Content-type: text/plain");
    header("Content-Disposition: attachment; filename=tambahproduk.txt");
	$nama = $_POST['nama_produk'];
	$deskripsi = $_POST['deskripsi_produk'];
	$stok = $_POST['stok_produk'];
    $harga = $_POST['harga_produk'];   
?>


 <?php
 echo "Nama Produk: $nama \n";
 echo "Deskripsi Produk: $deskripsi \n";
 echo "Jumlah Stok: $stok \n" ;
 echo "Harga: $harga \n";
 ?>