<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Output</title>
    <link rel="stylesheet" href="gaya2.css">
    <link rel="stylesheet" href="folder/style.css" type="text/css">
</head>
<body>
    <center>
   <h1>Rekap Pengisian Form</h1>
   <table class="tabel1">
    <tr>
       <th>Nama</th>
       <th>Email</th>
       <th>Jenis kelamin</th>
       <th>Kota Asal</th>
       <th>Hari / Tanggal</th>
       <th>Pesan</th>
    </tr>
    <tr>
        <td><?php $nama = $_POST['nama']; 
            echo "$nama";?>
        </td>
        <td><?php $email = $_POST['email']; 
            echo "$email";?>
        </td>
        <td><?php $jeniskelamin = $_POST['jeniskelamin']; 
            echo "$jeniskelamin";?>
        </td>
        <td><?php $kota = $_POST['kota']; 
            echo "$kota";?>
        </td>
        <td><?php $date = $_POST['date']; 
            echo "$date";?>
        </td>
        <td><?php $deskripsi = $_POST['deskripsi']; 
            echo "$deskripsi";?>
        </td>
        
    </tr>
   </table>
   </center> 
</body>
</html>