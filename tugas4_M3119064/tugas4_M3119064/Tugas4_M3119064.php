<!DOCTYPE HTML>
<html>
<head><title>Menghitung gaji</title></head>
<h1>Menghitung Gaji Karyawan</h1>
<h2>M3119064</h2>
<body>
<form methode="GET">
<table>
<tr>
<td>Nama</td>
<td> : </td>
<td><input type=text name=nama size=27></td>
</tr>


    <form>
        <td>Golongan</td>
        <td> : </td>
        <td>
            <select name="golongan">
                <option selected disabled>Silahkan Pilih</option>
                <option value="golongan1">Golongan 1</option>
                <option value="golongan2">Golongan 2</option>
                <option value="golongan3">Golongan 3</option>
            </select></td>
            </tr>

        <td>Status</td>
        <td> : </td>
        <td>
            <select name=status>
                <option value="1" selected="selected"> Silahkan Pilih </option>
                <option value="s"> Sudah Menikah </option>
                <option value="b"> Belum Menikah </option>
            </select></td>
        </tr>
        </body>

        <td>Jumlah Anak</td>
        <td> : </td>
        <td>
            <select name=jumlahanak>
                <option value="1" selected="selected"> Silahkan Pilih </option>
                <option value="a"> 0 </option>
                <option value="b"> 1 </option>
                <option value="c"> 2 </option>
                <option value="d"> 3 </option>
            </select></td>
        </tr>
        <td>Lama Bekerja</td>
        <td> : </td>
        <td>
            <select name=lamakerja>
                <option value="1" selected="selected"> Silahkan Pilih </option>
                <option value="a"> 2 tahun atau lebih </option>
                <option value="b"> kurang dari 2 tahun </option>
            </select></td>
        </tr>

        <tr>
        <td colspan="3"><input type=Submit name="submit" value=Hitung><input type=reset name="reset" value=Hapus></td>
        </tr>
    </table>
    </form>
    </body>
    </html>

    <body>
        <?php
        $nama=isset($_GET['nama'])?$_GET['nama']:'';
        $status = isset($_GET['status']) ? $_GET['status'] : '';
        $jumlahanak = isset($_GET['jumlahanak']) ? $_GET['jumlahanak'] : '';
        $lamakerja = isset($_GET['lamakerja']) ? $_GET['lamakerja'] : '';
        $gol1pokok = 1000000;
        $gol2pokok = 2000000;
        $gol3pokok = 3000000;
        $pajakgol2 = 2000000 * 2.5 / 100;
        $pajakgol3 = 3000000 * 3 / 100;
        $tunjangankeluarga = 200000;
        $tunjangananak = 100000;
        $tunjanganprofesi = 50000;
        $pilihgolongan = @$_GET['golongan'];
            switch ($pilihgolongan) {
                case 'golongan1':
                    $gajipokok = $gol1pokok;
                    break;
                case 'golongan2':
                    $gajipokok = $gol2pokok - $pajakgol2;
                    break;
                case 'golongan3':
                    $gajipokok = $gol3pokok - $pajakgol3;
                    break;
                }
        
        if(!empty($nama) and !empty($status) and !empty($jumlahanak) and !empty($lamakerja) and !empty($gol1pokok) and !empty($gol2pokok) and !empty($gol3pokok) and !empty($pajakgol2) and !empty($pajakgol3) and !empty($tunjangankeluarga) and !empty($tunjangananak) and !empty($tunjanganprofesi) and !empty($pilihgolongan))
        {
          ?>
        <table border="1">
        <tr>
        <td> Nama </td>
        <td> : </td>
        <td>
        <?php
        if (!empty($nama))
            {
                echo $nama ;
            }
        else
            {   
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?> 
        </td>
        </tr>
        
        <tr>
        <td> Pajak </td>
        <td> : </td>
        <td>
            <?php
            if ($pilihgolongan=="golongan1")
            {
                echo "0%";
            }
            else
            if ($pilihgolongan=="golongan2")
            {
                echo "2.5%";
            }       
            else
            if ($pilihgolongan=="golongan3")
            {
                echo "5%";
            }
            ?>
        </td>
        </tr>
        
        <tr>
        <td> Jumlah Gaji </td>
        <td> : </td>
        <td>
        <?php
        if ($status == "s" && $jumlahanak == "a" && $lamakerja == "a") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga + $tunjanganprofesi;
            $gajipokok2 = $gajipokok1;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "s" && $jumlahanak == "a" && $lamakerja == "b") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga;
            $gajipokok2 = $gajipokok1;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "s" && $jumlahanak == "b" && $lamakerja == "a") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga;
            $gajipokok2 = $gajipokok1 + $tunjangananak + $tunjanganprofesi;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "s" && $jumlahanak == "b" && $lamakerja == "b") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga;
            $gajipokok2 = $gajipokok1 + $tunjangananak;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "s" && $jumlahanak == "c" && $lamakerja == "a") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga;
            $gajipokok2 = $gajipokok + $tunjangankeluarga + $tunjangananak * 2 + $tunjanganprofesi;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "s" && $jumlahanak == "c" && $lamakerja == "b") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga;
            $gajipokok2 = $gajipokok + $tunjangankeluarga + $tunjangananak * 2;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "s" && $jumlahanak == "d" && $lamakerja == "a") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga;
            $gajipokok2 = $gajipokok + $tunjangankeluarga + $tunjangananak * 3 + $tunjanganprofesi;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "s" && $jumlahanak == "d" && $lamakerja == "b") {
            $gajipokok1 = $gajipokok + $tunjangankeluarga;
            $gajipokok2 = $gajipokok + $tunjangankeluarga + $tunjangananak * 3;
            echo "Rp.", $gajipokok2;
        } elseif ($status == "b") {
            echo "Rp.", $gajipokok;
            echo "\n||\n";
            echo "\ntidak ada tunjangan keluarga\n";
        }
        ?>
            </td>
        </tr>
    </table>
    <?php
    }
    else
    {
    echo"<script>alert('Data Kosong')</script>";
    }
    ?>
    </body>