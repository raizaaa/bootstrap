<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
    <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Latihan Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
  </head>
  <body>
    <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="latihan.php">Raizaaa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="latihan.php">Latihan 1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="latihan2.php">Latihan 2</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <!-- End Header -->
    

    <!-- Content -->
    <div class="container">
        <div class="row" style="padding:25px;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><center>FORMULIR</center></div>
                    <div class="card-body">
                    <!-- Isi Disini -->
                    <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" name="kelas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" class="byn btn-info">Simpan</button>
                        <button type="reset" class="byn btn-danger">Reset</button>
                    </div>
                    </form>
                    <!-- End Isi -->
                    <?php
                        if (isset($_POST['simpan'])) {
                            $a = $_POST['nama'];
                            $b = $_POST['kelas'];
                            $c = $_POST['alamat'];
                        }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <center><h2>Hasil Formulir</h2></center>
                <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th><?php echo $a; ?></th>
                        <th><?php echo $b; ?></th>
                        <th><?php echo $c; ?></th>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->


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
    header("location: login.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>









