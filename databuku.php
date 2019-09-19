<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <script src="main.js"></script>
</head>
<body>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="card-header">Data Pembelian Buku</div>
                    <form action="output.php" method="POST">
    <?php
        if (isset($_POST['simpan'])) {
            for ($a=1; $a <= $_POST['jubuk']; $a++) {
            ?>  
                <input type="hidden" name="nama" value="<?php echo $nama;?>">
                <input type="hidden" name="alamat" value="<?php echo $alamat;?>">
                <input type="hidden" name="jenkel" value="<?php echo $jenkel;?>">
                <input type="hidden" name="tape" value="<?php echo $tape;?>">
                <input type="hidden" name="jubuk" value="<?php echo $jubuk;?>">
                    <!-- Isi Disini -->
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul[]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kode Buku</label>
                        <input type="text" name="kode[]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pengarang</label>
                        <input type="text" name="pengarang[]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Buku</label><br>
                            <select name="jenis">
                            <option value="Novel">Novel</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Horror">Horror</option>
                            <option value="Cergam">Cergam</option>
                            <option value="Komik">Komik</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Buku</label>
                        <input type="number" name="harga" min="10000" class="form-control" required>
                    </div>
                    </form>
                    <?php } ?>
                    <div class="form-group">
                        <button type="submit" name="pros" class="byn btn-info">Proses</button>
                        <button type="reset" class="byn btn-danger">Reset</button>
                    </div>
                    <!-- End Isi -->
       <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    


    <!-- JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JQuery Pertama, Selanjutnya bebas.js-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End Js -->
</body>
</html>