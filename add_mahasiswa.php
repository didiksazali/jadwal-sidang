<?php
session_start();
if (!empty($_SESSION['namauser']) AND !empty($_SESSION['password'])) {
    include 'config.php';
    include 'include/header.php';
    include 'include/sidebar.php';
    ?>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Formulir Data Mahasiswa
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="aksi_mahasiswa.php?act=input">
                                        <div class="form-group">
                                            <label>NIM Mahasiswa</label>
                                            <input class="form-control" placeholder="NIM Mahasiswa" name="nim"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input class="form-control" placeholder="Nama Mahasiswa" name="namamhs"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" placeholder="Alamat" name="alamat"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>ID Prodi</label>
                                            <select type="text" class="form-control" name="idprodi" autocomplete="off"
                                                    required>
                                                <option></option>
                                                <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM t_prodi");
                                                while ($data = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                    <option value="<?php echo $data['idprodi']; ?>">
                                                        <?php echo $data['idprodi']." - ".$data['namaprodi']; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input class="form-control" placeholder="No HP" name="handphone" required>
                                        </div>


                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="reset" class="btn btn-warning">Batal</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <!-- /.col-lg-12 -->
        </div>


        <?php
        include 'include/footer.php';
        ?>


    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


    </body>
    </html>
    <?php
}
?>