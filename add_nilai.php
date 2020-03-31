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
                        Formulir Data Nilai
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
                                    <form role="form" method="POST" action="aksi_nilai.php?act=input">
                                        <div class="form-group">
                                            <label>Nim Mahasiswa</label>
                                            <select class="form-control" type="text" name="nim" autocomplete="off"
                                                    required>
                                                <option></option>
                                                <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM t_mahasiswa");
                                                while ($data = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                    <option value="<?php echo $data['nim']; ?>">
                                                        <?php echo $data['nim']." - ".$data['namamhs']; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai Penguji 1</label>
                                            <input class="form-control" placeholder="Nilai Penguji 1" name="nilai1"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai Penguji 2</label>
                                            <input class="form-control" placeholder="Nilai Penguji 2" name="nilai2" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai Penguji 3</label>
                                            <input class="form-control" placeholder="Nilai Penguji 3" name="nilai3" required>
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