<?php
session_start();
if (!empty($_SESSION['namauser']) AND !empty($_SESSION['password'])) {
    include 'config.php';
    include 'include/header.php';
    include 'include/sidebar.php';
    ?>
    <div id="page-wrapper" >
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <!--   Kitchen Sink -->
                    <div class="alert alert-info">
                        <strong>Hai ^_^</strong> Selamat Bertugas <?php echo $_SESSION['namauser']; ?>, Semoga Hari Anda Menyenangkan :D.
                    </div>
                    <!-- End  Kitchen Sink -->
                </div>

<!--                <div class="row">-->
<!--                    <div class="col-md-4 col-sm-12 col-xs-12">-->
<!--                        <div class="panel panel-primary text-center no-boder bg-color-green">-->
<!--                            <div class="panel-body">-->
<!--                                --><?php
//                                $query = mysqli_query($koneksi, "SELECT COUNT(id_barang) as jumlah_barang FROM barang")
//                                or die('Ada kesalahan pada query ' . mysqli_error($koneksi));
//                                $data = mysqli_fetch_assoc($query);
//                                ?>
<!--                                <i class="fa fa-shopping-cart fa-5x"></i>-->
<!--                                <h3>--><?php //echo $data["jumlah_barang"];?><!--</h3>-->
<!--                            </div>-->
<!--                            <div class="panel-footer back-footer-green">-->
<!--                                Data Barang-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 col-sm-12 col-xs-12">-->
<!--                        <div class="panel panel-primary text-center no-boder bg-color-blue">-->
<!--                            <div class="panel-body">-->
<!--                                --><?php
//                                $query = mysqli_query($koneksi, "SELECT COUNT(id_jasa) as jumlah_jasa FROM jasa")
//                                or die('Ada kesalahan pada query: ' . mysqli_error($koneksi));
//                                $data = mysqli_fetch_assoc($query);
//                                ?>
<!--                                <i class="fa fa-truck fa-5x"></i>-->
<!--                                <h3>--><?php //echo $data["jumlah_jasa"];?><!--</h3>-->
<!--                            </div>-->
<!--                            <div class="panel-footer back-footer-blue">-->
<!--                                Data Jasa-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 col-sm-12 col-xs-12">-->
<!--                        <div class="panel panel-primary text-center no-boder bg-color-red">-->
<!--                            <div class="panel-body">-->
<!--                                --><?php
//                                $query = mysqli_query($koneksi, "SELECT COUNT(id_mekanik) as jumlah_mekanik FROM mekanik")
//                                or die('Ada kesalahan pada query: ' . mysqli_error($koneksi));
//                                $data = mysqli_fetch_assoc($query);
//                                ?>
<!--                                <i class="fa fa fa-user fa-5x"></i>-->
<!--                                <h3>--><?php //echo $data["jumlah_mekanik"];?><!--</h3>-->
<!--                            </div>-->
<!--                            <div class="panel-footer back-footer-red">-->
<!--                                Data Mekanik-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!---->
<!--                <div class="row">-->
<!--                    <div class="col-md-4 col-sm-12 col-xs-12">-->
<!--                        <div class="panel panel-primary text-center no-boder bg-color-red">-->
<!--                            <div class="panel-body">-->
<!--                                --><?php
//                                $query = mysqli_query($koneksi, "SELECT COUNT(nomor_pendaftaran) as jumlah_pendaftaran FROM pendaftaran")
//                                or die('Ada kesalahan pada query: ' . mysqli_error($koneksi));
//                                $data = mysqli_fetch_assoc($query);
//                                ?>
<!--                                <i class="fa fa-book fa-5x"></i>-->
<!--                                <h3>--><?php //echo $data["jumlah_pendaftaran"];?><!--</h3>-->
<!--                            </div>-->
<!--                            <div class="panel-footer back-footer-red">-->
<!--                                Data Pendaftaran-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 col-sm-12 col-xs-12">-->
<!--                        <div class="panel panel-primary text-center no-boder bg-color-green">-->
<!--                            <div class="panel-body">-->
<!--                                --><?php
//                                $query = mysqli_query($koneksi, "SELECT COUNT(no_faktur) as jumlah_service FROM service")
//                                or die('Ada kesalahan pada query: ' . mysqli_error($koneksi));
//                                $data = mysqli_fetch_assoc($query);
//                                ?>
<!--                                <i class="fa fa-gear fa-5x"></i>-->
<!--                                <h3>--><?php //echo $data["jumlah_service"];?><!--</h3>-->
<!--                            </div>-->
<!--                            <div class="panel-footer back-footer-green">-->
<!--                                Data Service-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 col-sm-12 col-xs-12">-->
<!--                        <div class="panel panel-primary text-center no-boder bg-color-blue">-->
<!--                            <div class="panel-body">-->
<!--                                --><?php
//                                $query = mysqli_query($koneksi, "SELECT COUNT(id_user) as jumlah_user FROM user")
//                                or die('Ada kesalahan pada query: ' . mysqli_error($koneksi));
//                                $data = mysqli_fetch_assoc($query);
//                                ?>
<!--                                <i class="fa fa fa-user fa-5x"></i>-->
<!--                                <h3>--><?php //echo $data["jumlah_user"];?><!--</h3>-->
<!--                            </div>-->
<!--                            <div class="panel-footer back-footer-blue">-->
<!--                                Data User-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


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




    <!-- page script -->
    <script type="text/javascript">

        function allowNumbersOnly(e) {
            var code = (e.which) ? e.which : e.keyCode;
            if (code > 31 && (code < 48 || code > 57)) {
                e.preventDefault();
            }
        }

        $(document).ready(function () {
            $('.tanggal').datepicker({
                format: 'yyyy-mm-dd',
                autoclose:true,
                todayHighlight: true
            });

            $('.jampicker').clockpicker({
                autoclose: true
            });


        });



    </script>

    </body>
    </html>

    <?php
} else {
    echo "harus login";
}
?>
   

