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
                                    <?php
                                    $idnilai = $_GET["idnilai"];
                                    $sqlquery = "SELECT * FROM t_nilai WHERE idnilai = '$idnilai'";
                                    if ($result = mysqli_query($koneksi, $sqlquery)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <form role="form" method="POST" action="aksi_nilai.php?act=update">
                                                <input type="hidden" name="idnilai" id="idnilai"
                                                       value="<?php echo $row["idnilai"]; ?>">
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <?php echo $row["nim"]; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nilai Penguji 1</label>
                                                    <input class="form-control" placeholder="Nilai Penguji 1" name="nilai1" value="<?php echo $row["nilai1"]; ?>"
                                                           required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nilai Penguji 2</label>
                                                    <input class="form-control" placeholder="Nilai Penguji 2" name="nilai2" value="<?php echo $row["nilai2"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nilai Penguji 3</label>
                                                    <input class="form-control" placeholder="Nilai Penguji 3" name="nilai3" value="<?php echo $row["nilai3"]; ?>"required>
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
