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
                                    <?php
                                    $idmhs = $_GET["idmhs"];
                                    $sqlquery = "SELECT m.*, p.* FROM t_mahasiswa m INNER JOIN t_prodi p ON m.idprodi=p.idprodi WHERE idmhs = '$idmhs'";
                                    if ($result = mysqli_query($koneksi, $sqlquery)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <form role="form" method="POST" action="aksi_mahasiswa.php?act=update">
                                                <input type="hidden" name="idmhs" id="idmhs"
                                                       value="<?php echo $row["idmhs"]; ?>">
                                                <div class="form-group">
                                                    <label>NIM Mahasiswa</label>
                                                    <input class="form-control" placeholder="NIM Mahasiswa" name="nim" value="<?php echo $row["nim"]; ?>"
                                                           required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Mahasiswa</label>
                                                    <input class="form-control" placeholder="Nama Mahasiswa" name="namamhs" value="<?php echo $row["namamhs"]; ?>"
                                                           required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $row["alamat"]; ?>"
                                                           required>
                                                </div>
                                                <div class="form-group">
                                                    <label>ID Prodi</label>
                                                    <select type="text" class="form-control" name="idprodi"
                                                            value="<?php echo $row["idprodi"]; ?>" autocomplete="off"
                                                            required>
                                                        <option></option>
                                                        <?php
                                                        $query = mysqli_query($koneksi, "SELECT * FROM t_prodi");
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                            ?>
                                                            <option value="<?php echo $data['idprodi']; ?>" <?php if ($data["idprodi"] == $row["idprodi"]) {
                                                                echo "selected";
                                                            } ?> >
                                                                <?php echo $data['idprodi']." - ".$data['namaprodi']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>No HP</label>
                                                    <input class="form-control" placeholder="No HP" name="handphone" value="<?php echo $row["handphone"]; ?>" required>
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
