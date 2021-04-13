<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kredit Motor Deva</title>
    <link rel="stylesheet" href="folder/style.css" type="text/css">
    <link rel="stylesheet" href="gaya23.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <main>
    <?php
        $error = [];
        $status = false;
        if (isset($_POST['submit']) && ($_POST['bayar_pertama'] < ($_POST['harga_motor'] * 0.2))):
            $error["bayar_pertama"] = "Minimal 20% dari haga motor!";
            $status = true;
        endif; ?>
        <div class="container mt-5 mb-4">
            <h1 class="font-weight-bold text-center mb-5">Kredit Motor M3119064</h1>
            <form action="" method="post">
                        <table>
                        <form>
                        <tr>
                        <td>Harga Motor</td>
                        <td> : </td>
                        <td> <input type="number" class="form-control" id="harga_motor" name="harga_motor" required>
                        </td>
                        </tr>

                        <tr>
                        <td>Bayar Pertama</td>
                        <td> : </td>
                        <td> <input type="number" class="form-control <?php if (isset($error['bayar_pertama'])):?> is-invalid <?php endif ?>" id="bayar_pertama" name="bayar_pertama" required>
                        </td>
                        </tr>
                            <?php if (isset($error['bayar_pertama'])): ?>
                            <div class="invalid-feedback">
                                <?= $error['bayar_pertama'] ?>
                            </div>
                        <?php endif ?>
                    <td> Bulan </td>
                    <td> : </td>
                        <td> <select name="bulan" id="bulan" class="form-control custom-select" required>
                            <option disabled selected>Silahkan Pilih</option>
                            <option value="12">12 bulan</option>
                            <option value="24">24 bulan</option>
                            <option value="36">36 bulan</option>
                        </select></td>
                        <tr>
                        <td colspan="3"><button type="submit" class="btn btn-primary" name="submit">Kirim</button></td>
                        </tr>    
                <input type="hidden" id="bunga" name="bunga">
                    
                    </form>
                    </table>
            </form>
        </div>

    <!--    Modal    -->
        <?php
        extract($_POST);
        $terhutang = 0;
        $terhutangtotal=0;
        $bunga = 0;
        $cicilan = 0;
        if (isset($submit) && !$status):
            $terhutang = $harga_motor - $bayar_pertama;
            $bunga = $bulan * 3/100 * $terhutang;
            $terhutangtotal = $terhutang + $bunga;
            $cicilan = ($terhutang + $bunga) / $bulan ; ?>
            <div class="modal fade" id="modal_motor" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cicilan Kredit Motor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Bulan</th>
                                    <th scope="col">Cicilan</th>
                                    <th scope="col">Terbayar</th>
                                    <th scope="col">Kurang</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $terbayar = $cicilan;
                                $kurang = $terhutangtotal - $cicilan;
                                for ($i = 1; $i <= $bulan; $i++): ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td>Rp.<?= number_format($cicilan) ?></td>
                                        <td>Rp.<?= number_format($terbayar) ?></td>
                                        <td>Rp.<?= number_format($kurang); ?></td>
                                    </tr>
                                <?php
                                    $terbayar += $cicilan;
                                    $kurang -= $cicilan;
                                endfor ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if (document.getElementById("modal_motor")) {
                $("#modal_motor").modal("show");
            }
        });
    </script>
</body>
</html>