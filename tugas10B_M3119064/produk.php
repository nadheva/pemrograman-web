      <!-- Bottom Bar Start -->
      <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                            <a href="index.php">
                            </a>
                        </div>
                    </div>             
                    <?php 
                        if(isset($_GET['target']))
                        {
                        if($_GET['target']=='input') {
                        require('input.php');
                        }
                        }
                        else{
                        require('index.php');
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    require('database.php');
                    $queryselect = "select * from tb_produk";
                    $hasilselect = mysqli_query($koneksi1,$queryselect);
                    $jumlah = mysqli_num_rows($hasilselect);
                    echo "Jumlah Produk: $jumlah </br>";
                    if($jumlah){
                        echo "<table border='1'>";
                        echo "
                        <tr>
                        <th>ID Produk</th><th>Nama</th><th>Deskripsi</th><th>Stok</th><th>Harga</th>
                        </tr>";
                        while ($row = mysqli_fetch_array($hasilselect)) {
                            echo "<tr>
                            <td>".$row['id_produk']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['deskripsi']."</td>
                            <td>".$row['stok']."</td>
                            <td>".$row['harga']."</td>
                            </tr>";
                        }
                    }     
                    ?>
                    <p><div class="input" style="left: 8rem;" action="input.php" method="POST">
                        <a class="button" href="index.php?target=input"><button type="submit" class="btn btn-success btn-block" name="input">Tambah Produk</button>
                    </a></p>
                                        
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>