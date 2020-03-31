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
                        Formulir Data Judul Jadwal
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
                                    $jadwalid = $_GET["jadwalid"];
                                    $sqlquery = "SELECT j.*, p.*, m.*, d.*, u.* FROM t_judul_jadwal j INNER JOIN t_prodi p 
                                                     ON j.idprodi=p.idprodi INNER JOIN t_mahasiswa m ON j.nim=m.nim INNER JOIN 
                                                     t_dosen d ON j.dosenidpembimbing=d.dosenid INNER JOIN t_user u ON j.userid=u.userid
                                                    WHERE jadwalid = '$jadwalid'";
                                    if ($result = mysqli_query($koneksi, $sqlquery)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <form role="form" method="POST" enctype="multipart/form-data" action="aksi_judul_jadwal.php?act=update">
                                                <input type="hidden" name="jadwalid" id="jadwalid"
                                                       value="<?php echo $row["jadwalid"]; ?>">
                                                <div class="form-group">
                                                    <label>ID Prodi</label>
                                                    <select type="text" class="form-control" name="idprodi" autocomplete="off" value="<?php echo $row["idprodi"]; ?>"
                                                            required>
                                                        <option></option>
                                                        <?php
                                                        $query = mysqli_query($koneksi, "SELECT * FROM t_prodi");
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                            ?>
                                                            <option value="<?php echo $data['idprodi']; ?>" <?php if ($data["idprodi"] == $row["idprodi"]) {
                                                                echo "selected";
                                                            } ?>>
                                                                <?php echo $data['idprodi']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tahun Akademik</label>
                                                    <input class="form-control" placeholder="Tahun Akademik" name="tahunak" value="<?php echo $row["tahunak"]; ?>"
                                                           required>
                                                </div>
                                                <!--                                        <div class="form-group">-->
                                                <!--                                            <label>Tanggal</label>-->
                                                <!--                                            <input class="form-control" placeholder="Tanggal" name="tanggal" required>-->
                                                <!--                                        </div>-->
                                                <div class="form-group">
                                                    <label>NIM Ketua</label>
                                                    <select type="text" class="form-control" name="nim" autocomplete="off" value="<?php echo $row["nim"]; ?>"
                                                            required>
                                                        <option></option>
                                                        <?php
                                                        $query = mysqli_query($koneksi, "SELECT * FROM t_mahasiswa");
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                            ?>
                                                            <option value="<?php echo $data['nim']; ?>" <?php if ($data["nim"] == $row["nim"]) {
                                                                echo "selected";
                                                            } ?>>
                                                                <?php echo $data['nim']." - ".$data['namamhs']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input class="form-control" placeholder="Judul" name="judul" value="<?php echo $row["judul"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tempat Penelitian</label>
                                                    <input class="form-control" placeholder="Tempat Penelitian" name="tempatpenelitian" value="<?php echo $row["tempatpenelitian"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input class="form-control" placeholder="Status" name="status" value="<?php echo $row["status"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dosen Pembimbing</label>
                                                    <select type="text" class="form-control" name="dosenidpembimbing" autocomplete="off"
                                                            required>
                                                        <option></option>
                                                        <?php
                                                        $query = mysqli_query($koneksi, "SELECT * FROM t_dosen");
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                            ?>
                                                            <option value="<?php echo $data['dosenid']; ?>" <?php if ($data["dosenid"] == $row["dosenidpembimbing"]) {
                                                                echo "selected";
                                                            } ?>>
                                                                <?php echo $data['dosenid']." - ".$data['namadosen']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Upload File</label>
                                                    <input type="file" name="uploadfile">
                                                    <br/>
                                                    <?php
                                                         echo $row['uploadfile'];
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Ujian</label>
                                                    <input class="form-control" id="tanggal" placeholder="Tanggal Ujian" name="tanggalujian" value="<?php echo $row["tanggalujian"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jam Mulai</label>
                                                    <input class="form-control" id="jampicker" placeholder="Jam Mulai" name="jammulai" value="<?php echo $row["jammulai"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jam Selesai</label>
                                                    <input class="form-control" placeholder="Jam Selesai" name="jamselesai" value="<?php echo $row["jamselesai"]; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penguji 1</label>
                                                    <select type="text" class="form-control" name="dosenidpenguji1" autocomplete="off"
                                                            required>
                                                        <option></option>
                                                        <?php
                                                        $query = mysqli_query($koneksi, "SELECT * FROM t_dosen");
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                            ?>
                                                            <option value="<?php echo $data['dosenid']; ?>" <?php if ($data["dosenid"] == $row["dosenidpenguji1"]) {
                                                                echo "selected";
                                                            } ?>>
                                                                <?php echo $data['dosenid']." - ".$data['namadosen']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penguji 2</label>
                                                    <select type="text" class="form-control" name="dosenidpenguji2" autocomplete="off"
                                                            required>
                                                        <option></option>
                                                        <?php
                                                        $query = mysqli_query($koneksi, "SELECT * FROM t_dosen");
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                            ?>
                                                            <option value="<?php echo $data['dosenid']; ?>" <?php if ($data["dosenid"] == $row["dosenidpenguji2"]) {
                                                                echo "selected";
                                                            } ?>>
                                                                <?php echo $data['dosenid']." - ".$data['namadosen']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penguji 3</label>
                                                    <select type="text" class="form-control" name="dosenidpenguji3" autocomplete="off"
                                                            required>
                                                        <option></option>
                                                        <?php
                                                        $query = mysqli_query($koneksi, "SELECT * FROM t_dosen");
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                            ?>
                                                            <option value="<?php echo $data['dosenid']; ?>" <?php if ($data["dosenid"] == $row["dosenidpenguji3"]) {
                                                                echo "selected";
                                                            } ?>>
                                                                <?php echo $data['dosenid']." - ".$data['namadosen']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <!--                                        <div class="form-group">-->
                                                <!--                                            <label>User</label>-->
                                                <!--                                            <input class="form-control" placeholder="User" name="userid" required>-->
                                                <!--                                        </div>-->

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
    <!-- Datepicker -->
    <script src="assets/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>


    </body>
    </html>
    <?php
}
?>
