<!DOCTYPE html>
<html>
<head>
	<title>Smartphone Store</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
		<link href="css/style.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
	<!-- Top bar Start -->
	<div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        nadheva17@student.uns.ac.id
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone"></i>
                        +6285-735-691-018
                    </div>
                </div>
            </div>
        </div>
		<!-- Top bar End -->

                    
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
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
	      <li class="nav-item">
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
			elseif ($_GET['target']=='input') {
				require('input.php');
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