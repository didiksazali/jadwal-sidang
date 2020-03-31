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
                        Formulir Data Dosen
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
                                    <?php
                                    $dosenid = $_GET["dosenid"];
                                    $sqlquery = "SELECT * FROM t_dosen WHERE dosenid = '$dosenid'";
                                    if ($result = mysqli_query($koneksi, $sqlquery)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <form role="form" method="POST" action="aksi_dosen.php?act=update">
                                                <input type="hidden" name="dosenid" id="dosenid"
                                                       value="<?php echo $row["dosenid"]; ?>">
                                                <div class="form-group">
                                                    <label>Nama Dosen</label>
                                                    <input class="form-control" placeholder="Nama Dosen" name="namadosen"
                                                           value="<?php echo $row["namadosen"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input class="form-control" placeholder="Alamat" name="alamat"
                                                           value="<?php echo $row["alamat"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>No HP</label>
                                                    <input class="form-control" placeholder="No HP"
                                                           value="<?php echo $row["handphone"]; ?>" name="handphone" required>
                                                </div>

                                                <button type="submit" class="btn btn-success">Ubah</button>
                                                <button type="reset" class="btn btn-warning">Batal</button>
                                            </form>
                                            <?php
                                        }
                                        mysqli_free_result($result);
                                    }
                                    mysqli_close($koneksi);
                                    ?>
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
