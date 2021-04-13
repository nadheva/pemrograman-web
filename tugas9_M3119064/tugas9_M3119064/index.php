<!DOCTYPE html>
<html>
<head>
	<title>Smartphone Store</title>
	<link rel="stylesheet" href="bootstrap/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="swiper.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">
	  	<!-- <img src="https://fontmeme.com/permalink/201110/258fd21aeed992a149012ac5a134e9de.png" alt="comic-fonts" border="0"> -->
	  	<img src="https://fontmeme.com/permalink/201110/258fd21aeed992a149012ac5a134e9de.png" alt="comic-fonts" border="0">
	  	<!-- <img src="https://fontmeme.com/permalink/201110/258fd21aeed992a149012ac5a134e9de.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201110/258fd21aeed992a149012ac5a134e9de.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201110/258fd21aeed992a149012ac5a134e9de.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201110/258fd21aeed992a149012ac5a134e9de.png" alt="comic-fonts" border="0"> -->
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php?target=home">Beranda <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php?target=produk">Produk</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php?target=keranjang">Keranjang</a>
          </li>
          <li class="nav-item">
	        <a class="nav-link" href="index.php?target=checkout">Checkout</a>
          </li>
          <li class="nav-item">
	        <a class="nav-link" href="index.php?target=nota">Nota</a>
	      </li>
	      <!-- <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	      </li> -->
	    </ul>
	  </div>
	</nav>
	<?php 
		if(isset($_GET['target']))
		{
			if($_GET['target']=='home') {
				require('home.php');
			}
			elseif ($_GET['target']=='produk') {
				require('produk.php');
			}
			elseif ($_GET['target']=='keranjang') {
				require('keranjang.php');
            }
            elseif ($_GET['target']=='checkout') {
                require('checkout.php');
            }
            elseif ($_GET['target']=='nota') {
                    require('nota.php');
            }
			else{
				echo "Halaman tidak ditemukan !!";
			}
		}
		else{
			require('home.php');
		}
	 ?>
</body>
</html>