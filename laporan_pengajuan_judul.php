<?php
session_start();
if (!empty($_SESSION['namauser']) AND !empty($_SESSION['password'])) {
    //include 'include/fungsi.php';
    include 'config.php';
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/fungsi_indotgl.php';
    ?>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Laporan Pengajuan Judul
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 align="center">STMIK HANG TUAH PEKANBARU</h2>
                            <h3 align="center">Jl. Ketitiran No. 100, Pekanbaru - Riau</h3>
                            </br>
                        </div>

                        <div class="panel-body">
                            <?php
                            $nim = $_POST['nim'];
                            $sqlquery = "SELECT * FROM t_judul_jadwal WHERE nim='$nim'";
                            if ($result = mysqli_query($koneksi, $sqlquery)) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                Dengan hormat,
                                </br>
                                Saya yang bertanda tangan di bawah ini:
                                </br>
                                <table>
                                    <tr>
                                        <td>Kelompok</td>
                                        <td>:</td>
                                        <?php
                                        $sqlquery2 = "SELECT * FROM t_mahasiswa WHERE nim='$nim'";
                                        if ($result2 = mysqli_query($koneksi, $sqlquery2)) {
                                            $row2 = mysqli_fetch_assoc($result2);
                                            ?>
                                            <td><?php echo $row2['namamhs']; ?></td>
                                            <?php
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Program Studi</td>
                                        <td>:</td>
                                        <td>Teknik Informatika</td>
                                    </tr>
                                </table>
                                <br>
                                <b>Bermaksud mengajukan judul Kerja Praktek sebagai berikut</b>
                                <br>
                                <b>Judul</b>
                                <br>
                                <td><?php echo $row['judul']; ?></td>
                                <br>
                                <b>Tempat Kerja Praktek</b>
                                <br>
                                <?php echo $row['tempatpenelitian']; ?>
                                </br>
                                </br>
                                Demikianlah permohonan ini saya sampaikan, atas perhatian dan kerja samanya saya mengucapkan terima kasih.
                                <?php
                            }
                            ?>
                            <div class="table-responsive">

                                <p>
                                    <div class='pull-right'>
                                        Pekanbaru, <?php echo tgl_indo($hari_ini); ?><br>
                                        <b>
                                            <center>Administrator KP</center>
                                        </b>
                                <p>&nbsp;</p>
                                <b>
                                    <center><?php echo $_SESSION['namauser']; ?></center>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>

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