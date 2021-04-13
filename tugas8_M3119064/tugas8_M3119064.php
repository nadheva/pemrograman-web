<!DOCTYPE html>
<html>
<head>
	<title>Ubah Kata</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style type="text/css">
		body,html{
			margin: 0;
			padding: 0;
		}
		textarea{
			margin: 20px auto;
		}
		.container{
			background-color: yellowgreen;
			width: 40%;
			margin: 20px auto;
			padding: 20px 0;
		}
		.head{
			font-size: 30px;
			font-family: arial, 'Times New Roman', Times, serif;
			text-align: center;
			color: white;
		}
		.konten{
			width: 80%;
			margin: 20px auto;
		}
		.hasil{
			width: 40%;
			margin: 20px auto;
			padding: 20px;
			background-color: green;
			box-sizing: border-box;
			color: white;
			font-size: 30px;
	</style>
</head>
<body>
	<div class="container">
		<div class="head">Masukkan Teks</div>
		<div class="konten">
			<form method="post">
				<div class="teks">
					<textarea class="textarea" name="teks" rows="10" cols="60" placeholder="Isi disini!"></textarea>
				</div>
				<div class="tombol">
					<button class="submit" type="submit" name="submit">
						Submit
					</button>
					<button class="reset" type="reset">
						Reset
					</button>
				</div>
				<?php 
					if (isset($_POST['submit'])) {
						// setlocale(LC_TIME, 'id_ID');
						$waktu_lengkap = date('N j/n/Y H:i:s');
						function tanggal_indonesia($waktu_lengkap){
							$nama_hari = array(1=> 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
							$nama_bulan = array(1=> 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

							$pisah_waktu = explode(" ",$waktu_lengkap);
							$hari = $pisah_waktu[0];
							$tanggal = $pisah_waktu[1];
							$jam = $pisah_waktu[2];

							$hari_baru = $nama_hari[$hari];
							$pisah_tanggal = explode("/",$tanggal);
							$tanggal_baru = $pisah_tanggal[0]." ".$nama_bulan[$pisah_tanggal[1]]." ".$pisah_tanggal[2];

							return $hari_baru.", ".$tanggal_baru." jam ".$jam." WIB";
						}
						tanggal_indonesia($waktu_lengkap);
					}
				?>
			</form>
			
		</div>
	</div>
		<?php if (isset($_POST['submit'])) : ?>
			<div class="hasil">
				<?php
					 	$teks = $_POST['teks'];
					 	$teks = strtolower($teks);
					 	$teks = str_replace("murid", "mahasiswa", $teks);
					 	$teks = str_replace("guru", "dosen", $teks);
					 	$teks = str_replace("luring", "daring", $teks);
					 	$teks = ucfirst($teks);
					 	echo $teks;
					 	echo "</br>";echo "</br>";
				?>
				<div style="font-size: 15px;">
					<?php 
                        echo "Dikirim pada ";
                        echo tanggal_indonesia($waktu_lengkap);

					?>
				</div>
			</div>
		<?php endif ?>
</body>
</html>