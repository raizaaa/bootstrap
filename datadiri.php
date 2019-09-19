<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Raiza Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <script src="main.js"></script>
</head>
<body style="padding:15px;">
    <center><h2>Raiza Book Store</h2></center>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pembelian Buku</div>
                    <div class="card-body">
                    <!-- Isi Disini -->
                    <form action="databuku.php" method="POST">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label><br>
                        <input type="radio" name="jenkel"  value="Perempuan" checked>Perempuan
                        <input type="radio" name="jenkel"  value="Laki-laki">Laki-laki
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pembelian</label>
                        <input type="date" name="tape" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Buku</label>
                        <input type="number" name="jubuk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" class="byn btn-info">Proses</button>
                        <button type="reset" class="byn btn-danger">Reset</button>
                    </div>
                    </form>
                    <!-- End Isi -->
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
<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: HalLog.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>




