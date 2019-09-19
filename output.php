
        <div class="row">
            <div class="col-md-12">
                <center><h2>Pembayaran</h2></center>
                <div class="table-responsive">
                    <?php
                        if (isset($_POST['simpan'])) {
                            $a = $_POST['nama'];
                            $b = $_POST['alamat'];
                            $c = $_POST['jenkel'];
                            $d = $_POST['as'];
                            $e = $_POST['bin'];
                            $f = $_POST['mtk'];
                            $g = $_POST['ipa'];
                            $h = $_POST['ingg'];
                            $rata = ($e+$f+$g+$h)/4;
                        if ($rata > 65) {
                            $ket = "Diterima";
                        }
                        else {
                            $ket = "Tidak Diterima";
                        }
                        }
                    ?>
                <table class="table">
                <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jumlah</th>
                <th>Tanggal Pembelian</th>
                </tr>
                <tr>
                <td><?php echo $nama;?></td>
                <td><?php echo $alamat;?></td>
                <td><?php echo $jenkel;?></td>
                <td><?php echo $jubuk;?></td>
                <td><?php echo $tape;?></td>
                </tr>
                <tr>
                <th>Nomor</th>
                <th>Judul</th>
                <th>Kode</th>
                <th>Pengarang</th>
                <th>Jenis Buku</th>
                <th>Harga (Rp)</th>
                </tr>       
                </table>
            </div>
        </div>
    </div>
    <!-- End Content -->
