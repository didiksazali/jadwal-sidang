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
                        Laporan Permohonan Pembimbing
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
                            <div class='pull-right'>
                                Pekanbaru, <?php echo tgl_indo($hari_ini); ?><br>
                            </div>
                            <?php
                            $nim = $_POST['nim'];
                            $sqlquery = "SELECT j.*, d.* FROM t_judul_jadwal j INNER JOIN t_dosen d ON j.dosenidpembimbing=d.dosenid 
                                         WHERE j.nim='$nim'";
                            if ($result = mysqli_query($koneksi, $sqlquery)) {
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                Nomor &nbsp;&nbsp;&nbsp;&nbsp;: 01/2019
                                </br>
                                Lampiran : -
                                </br>
                                Perihal &nbsp;&nbsp;&nbsp;&nbsp;: Permohonan Bimbingan Kerja Praktek
                                </br>
                                </br>
                                Kepada
                                </br>
                                Yth. Bapak/Ibu <?php echo $row['namadosen']; ?>
                                <br>
                                Dosen Pembimbing Kerja Praktek
                                <br>
                                Program Studi Teknik Informatika
                                <br>
                                <br>
                                <br>
                                <br>
                                Dengan hormat,
                                <br>
                                Bersama dengan ini kami mohon Bapak/Ibu untuk memberikan Bimbingan Kerja Praktek kepada mahasiswa dibawah ini:
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