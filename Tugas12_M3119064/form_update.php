<?php 
        if(isset($_GET['target']))
        {
        if($_GET['target']=='output') {
        require('output.php');
        }
        }
        else{
        require('index.php');
        }
?>
        <?php
		require('database.php');
		$target=$_GET['target'];
		$query="SELECT * FROM tb_produk WHERE id_produk='$target'";
		$hasil=mysqli_query($koneksi1,$query);
        ?>


<div class="container mt-20">
	 	<div class="d-flex justify-content-center">
	 		<div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
			  	<div class="card-header text-center">
			  		<h3>
			  			Edit Produk
                      </h3> 
			 	</div>
			  	<div class="card-body">
			    	<!-- <h5 class="card-title">Primary card title</h5> -->
				<form class="bg-primary" style="width: 30rem;" action="update.php" method="POST">
                <?php while($row=mysqli_fetch_array($hasil)) {?>
					<div class="row mb-3">
			 			<div class="col-4">
			 				<label>ID Produk</label>
			 			</div>
			 			<input class="col-7" type="text"  name="id_produk" value="<?php echo $row['id_produk'] ?> ">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Nama Produk</label>
			 			</div>
			 			<input class="col-7" type="text"  name="nama_produk" value="<?php echo $row['nama'] ?> ">
			 		</div>
					 <div class="row mb-3">
			 			<div class="col-4">
			 			  <label>Brand</label>
			 			</div>
			 			<select class="col-7"  name="brand">
								<?php
								require('database.php');
								$queryselect = "select * from brand";
								$hasilselect = mysqli_query($koneksi1, $queryselect);
								while ($row2 = mysqli_fetch_array($hasilselect)) 
								{
								if($row2['id_brand']==$row2['brand']) {
									$cetak="selected";
								}
								else{
									$cetak="";
								}
								echo "<option value ='".$row2['id_brand']."'>".$row2['nama_brand']."</option>";
								}
								?>
			 			</select>
					 </div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Deskripsi Produk</label>
			 			</div>
                         <textarea class="col-7" type="text"  name="deskripsi_produk" value="<?php echo $row['deskripsi']?> " textarea>

                         </textarea>    
					 </div>
					 <div class="row mb-3">
			 			<div class="col-4">
			 				<label>Stok Produk</label>
			 			</div>
			 			<input class="col-7" type="number"  name="stok_produk" value="<?php echo $row['stok']?> ">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Harga Produk</label>
			 			</div>
			 			<input class="col-7" type="text"  name="harga_produk" value="<?php echo $row['harga']?> ">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Foto</label>
			 			</div>
			 			<input type="hidden" name="MAX_FILE-SIZE" value="40000">
			 			<input class="col-7" type="file" accept="data/png" name="gambar_produk">
                     </div>
					 <a href="index.php?target=update"></a>
					 
                     <button type="submit" class="btn btn-success btn-block" name="submit">Simpan Perubahan</button>
				 </form>
				<?php } ?>
			  </div>
			</div>
	 	</div>
     </div>
