<?php  
//select.php  
if(isset($_POST["id_produk"]))
{
 $output = '';
 require('database.php');
 $query = "SELECT * FROM tb_produk WHERE id_produk = '".$_POST["id_produk"]."'";
 $result = mysqli_query($connect, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Nama Produk</label></td>  
            <td width="70%">'.$row["nama"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Brand</label></td>  
            <td width="70%">'.$row["brand"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Deskripsi</label></td>  
            <td width="70%">'.$row["deskripsi"].'</td>  
        </tr>
       
        <tr>  
            <td width="30%"><label>Jumlah Stok</label></td>  
            <td width="70%">'.$row["stok"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Harga</label></td>  
            <td width="70%">'.$row["harga"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>