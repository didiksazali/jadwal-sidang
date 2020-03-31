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
                        Formulir Judul Jadwal
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
                                    <form role="form" method="POST" enctype="multipart/form-data" action="aksi_judul_jadwal.php?act=input">
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
                                                        <?php echo $data['idprodi']; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Akademik</label>
                                            <input class="form-control" placeholder="Tahun Akademik" name="tahunak"
                                                   required>
                                        </div>
<!--                                        <div class="form-group">-->
<!--                                            <label>Tanggal</label>-->
<!--                                            <input class="form-control" placeholder="Tanggal" name="tanggal" required>-->
<!--                                        </div>-->
                                        <div class="form-group">
                                            <label>NIM Ketua</label>
                                            <select type="text" class="form-control" name="nim" autocomplete="off"
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
                                            <label>Judul</label>
                                            <input class="form-control" placeholder="Judul" name="judul" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Penelitian</label>
                                            <input class="form-control" placeholder="Tempat Penelitian" name="tempatpenelitian" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" placeholder="Status" name="status" required>
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
                                                    <option value="<?php echo $data['dosenid']; ?>">
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
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Ujian</label>
                                            <input class="form-control" id="tanggal" placeholder="Tanggal Ujian" name="tanggalujian" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Mulai</label>
                                            <input class="form-control" id="jampicker" placeholder="Jam Mulai" name="jammulai" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jam Selesai</label>
                                            <input class="form-control" placeholder="Jam Selesai" name="jamselesai" required>
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
                                                    <option value="<?php echo $data['dosenid']; ?>">
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
                                                    <option value="<?php echo $data['dosenid']; ?>">
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
                                                    <option value="<?php echo $data['dosenid']; ?>">
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
    <!-- Datepicker -->
    <script src="assets/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>






    </body>
    </html>
    <?php
}
?>