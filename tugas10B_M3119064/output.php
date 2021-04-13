<?php 
 if(isset($_GET['target']))
     {
     if($_GET['target']=='produk') {
     require('produk.php');
     }
     }
     else{
     require('index.php');
     }
?>
<?php 
    $id = $_POST['id_produk'];
	$nama = $_POST['nama_produk'];
	$deskripsi = $_POST['deskripsi_produk'];
	$stok = $_POST['stok_produk'];
    $harga = $_POST['harga_produk'];   

 echo "ID Produk: $id </br>";
 echo "Nama Produk: $nama </br>";
 echo "Deskripsi Produk: $deskripsi </br>";
 echo "Jumlah Stok: $stok </br>" ;
 echo "Harga: $harga </br>";
 require('database.php');
 $queryinput = "INSERT INTO tb_produk (id_produk,nama,deskripsi,stok,harga)
 VALUES ('$id','$nama','$deskripsi','$stok','$harga')";
 $hasilqueryinput = mysqli_query($koneksi1, $queryinput);
 if($hasilqueryinput=1) {
     echo "Input Berhasil! </br>";
 } else {
     echo "Input Gagal! </br>";
 }
    
 ?>
 <a href="index.php?target=produk">Hasil Input Produk</a>
 