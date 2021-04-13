<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="gaya1.css">
    <link rel="stylesheet" href="folder/style.css" type="text/css">
    <form action="Tabel.php" method='post'>
</head>
<body>
    <div id="login-box">
    <div class="left-box">
        <h1>Daftar</h1>
        <input type="text" name="nama" placeholder="Nama Lengkap">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <p>Jenis Kelamin</p>
        <input type="radio" name='jeniskelamin' value='Pria'>Laki - laki</br>
        <input type="radio" name='jeniskelamin' value='Wanita'>Perempuan</p>
        <p>Kota Asal 
        <select name="kota" id="">
            <option value="Silahkan Pilih">Silahkan Pilih</option>
            <option value="Karanganyar">Karanganyar</option>
            <option value="Boyolali">Boyolali</option>
            <option value="Sragen">Sragen</option>
            <option value="Magetan">Magetan</option>
        </select>
         </p>
         <p>Apakah anda menyetujui persyaratan?</p>
        <input type="checkbox" name="Opsi" value="Ya">Ya
        <input type="checkbox" name="Opsi" value="Tidak">Tidak
    </div>

    <div class="right-box">
        <input type="date" name="date">
        <textarea name="deskripsi" id="" cols="26" rows="2">Pesan</textarea>
        <input type="submit" name="signup-button" value="Daftar">
    </div>

    </div>
    </form>   
</body>
</html>