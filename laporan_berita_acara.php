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
                        Laporan Berita Acara Ujian
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
                            <p align="center">
                                <b>BERITA ACARA PROPOSAL KERJA PRAKTEK</b>
                            </p>
                            <?php
                            $nim = $_POST['nim'];
                            $sqlquery = "SELECT j.*, d.* FROM t_judul_jadwal j INNER JOIN t_dosen d ON j.dosenidpembimbing=d.dosenid 
                                         WHERE j.nim='$nim'";
                            if ($result = mysqli_query($koneksi, $sqlquery)) {
                                $row = mysqli_fetch_assoc($result);
                                ?>

                                <br>
                                Pada <?php echo tgl_indo($row['tanggalujian']); ?>, telah dilaksanakan Ujian Proposal Kerja Praktek Program Strata (S1), Program Studi Teknik Informatika STMIK Hang Tuah Pekanbaru terhadap
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php
                                        $sqlquery2 = "SELECT * FROM t_mahasiswa WHERE nim='$nim'";
                                        if ($result2 = mysqli_query($koneksi, $sqlquery2)) {
                                            $row2 = mysqli_fetch_assoc($result2);
                                            ?>
                                            <td><?php echo $row2['namamhs']; ?></td>
                                            <td><?php echo $row2    ['nim']; ?></td>
                                            <?php
                                        }
                                        ?>
                                    </tr>

                                    </tbody>

                                </table>
                                <br>
                                <table>
                                    <tr>
                                        <td>1.&nbsp;</td>
                                        <td>Judul&nbsp;</td>
                                        <td>:&nbsp;</td>
                                        <td><?php echo $row['judul']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>2.&nbsp;</td>
                                        <td>Dosen Pembimbing&nbsp;</td>
                                        <td>:&nbsp;</td>
                                        <td><?php echo $row['namadosen']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>3.&nbsp;</td>
                                        <td>Waktu Ujian&nbsp;</td>
                                        <td>:&nbsp;</td>
                                        <td><?php echo tgl_indo($row['tanggalujian']); ?></td>
                                    </tr>
                                </table>
                                <br>
                                <?php
                            }
                            ?>

                            <?php
                            $sqlquery3 = "SELECT * FROM t_nilai WHERE nim='$nim'";
                            if ($result3 = mysqli_query($koneksi, $sqlquery3)) {
                                $row3 = mysqli_fetch_assoc($result3);
                                ?>


                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Penguji</th>
                                    <th>Nilai</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <?php
                                        $sqlquery4 = "SELECT d.*,j.* FROM `t_judul_jadwal` j INNER JOIN t_dosen d ON d.dosenid=j.dosenidpenguji1 WHERE nim='$nim'";
                                        if ($result4 = mysqli_query($koneksi, $sqlquery4)) {
                                        $row4 = mysqli_fetch_assoc($result4);
                                        ?>
                                            <?php echo $row4['namadosen']; ?>

                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $row3['nilai1']; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        $sqlquery5 = "SELECT d.*,j.* FROM `t_judul_jadwal` j INNER JOIN t_dosen d ON d.dosenid=j.dosenidpenguji2 WHERE nim='$nim'";
                                        if ($result5 = mysqli_query($koneksi, $sqlquery5)) {
                                            $row5 = mysqli_fetch_assoc($result5);
                                            ?>
                                            <?php echo $row5['namadosen']; ?>

                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $row3 ['nilai2']; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        $sqlquery6 = "SELECT d.*,j.* FROM `t_judul_jadwal` j INNER JOIN t_dosen d ON d.dosenid=j.dosenidpenguji3 WHERE nim='$nim'";
                                        if ($result6 = mysqli_query($koneksi, $sqlquery6)) {
                                            $row6 = mysqli_fetch_assoc($result6);
                                            ?>
                                            <?php echo $row6['namadosen']; ?>

                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $row3 ['nilai3']; ?></td>
                                </tr>
                                <tr>
                                    <td><b>
                                            Total Nilai
                                        </b>
                                    </td>
                                    <td>
                                        <?php
                                        $jumlah = ($row3['nilai1']+$row3['nilai2']+$row3['nilai3'])/3;
                                        echo '<b>'.$jumlah.'<b>';
                                        ?>
                                    </td>
                                </tr>


                                <?php
                                }
                                ?>


                                </tbody>

                            </table>


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