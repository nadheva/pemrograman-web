<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="folder/style.css" type="text/css">
    <link rel="stylesheet" href="gaya.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <br>
    <br>
    <br>
    <main>
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h1 class="font-weight-bold text-center mt-4 mb-4">Kalkulator M3119064</h1>
            <form class="mb-5" method="post">
                <div class="form-row">
                    <div class="col-auto">
                        <label>
                            <input type="number" class="form-control" name="angka1" placeholder="Input Angka Ke-1" required>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label>
                            <select class="custom-select" name="operator" required>
                                <option disabled selected>Operator</option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-auto">
                        <label>
                            <input type="number" class="form-control" name="angka2" placeholder="Input Angka Ke-2" required>
                        </label>
                    </div>
                    <div class="col-auto">
                        <input type="submit" name="hitung" value="Hitung">
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- Modal-->
    <?php if (isset($_POST['hitung'])):
        $hasil = 0;
        switch ($_POST['operator']) {
            case "+":
                $hasil = (int)$_POST['angka1'] + (int)$_POST['angka2'];
                $_POST['keterangan'] = 'Penjumlahan';
                break;
            case "-":
                $hasil = (int)$_POST['angka1'] - (int)$_POST['angka2'];
                $_POST['keterangan'] = 'Pengurangan';
                break;
            case "*":
                $hasil = (int)$_POST['angka1'] * (int)$_POST['angka2'];
                $_POST['keterangan'] = 'Perkalian';
                break;
            case "/":
                $hasil = (int)$_POST['angka1'] / (int)$_POST['angka2']; 
                $_POST['keterangan'] = 'Pembagian';
                break;
            default:
                echo "<h1>Masukkan Operator nya</h1>";
                die;
        } ?>
        <div class="modal fade" id="modal-hasil">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hasil <?= $_POST['keterangan'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Hasil <b><?= $_POST['keterangan'] ?></b>nya adalah <b><?= $hasil ?></b></h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if (document.getElementById('modal-hasil')) {
                $('#modal-hasil').modal('show')
            }
        });
    </script>
</body>
</html>