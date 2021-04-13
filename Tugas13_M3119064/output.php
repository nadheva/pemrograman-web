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
    $brand = $_POST['brand'];
	$deskripsi = $_POST['deskripsi_produk'];
	$stok = $_POST['stok_produk'];
    $harga = $_POST['harga_produk'];
    $tipe = $_FILES['gambar']['type'];
	$tmpFiles = $_FILES['gambar']['tmp_name'];

	$tipe = explode('/', $tipe);
	$tipe = end($tipe);
	$gambar = uniqid().'.'.$tipe;//nama gambar

	move_uploaded_file($tmpFiles, 'data/gambar'.$gambar);



 require('database.php');
 $queryinput = "INSERT INTO tb_produk (id_produk,nama,brand,deskripsi,stok,harga,gambar)
 VALUES ('$id','$nama','$brand','$deskripsi','$stok','$harga','$gambar')";
 $hasilqueryinput = mysqli_query($koneksi1, $queryinput);
 if($hasilqueryinput == 1): ?>
    <div class="container d-flex justify-content-center">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Produk Sudah Terdaftar</h5>
            <?php 
                // $openfile=fopen($file, 'r');
                // while (true) {
                // 	$kata = fgets($openfile);
                // 	if($kata==null){
                // 		break;
                // 	}
                // 	echo $kata;
                // 	echo "</br>";
                // }
                echo "ID Produk: $id </br>";
                echo "Nama Produk: $nama </br>";
                echo "Brand: $brand </br>";
                echo "Deskripsi Produk: $deskripsi </br>";
                echo "Jumlah Stok: $stok </br>" ;
                echo "Harga: $harga </br>";
                echo "Gambar: $gambar </br>";

            ?>
          </div>
        </div>
    </div>
<?php else : ?>
    <div class="container d-flex justify-content-center">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Produk Tidak terdaftar</h5>
          </div>
        </div>
    </div>
<?php endif ?>
 <a href="index.php?target=produk">Hasil Input Produk</a>

 