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
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Judul Jadwal
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="add_judul_jadwal.php" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data Judul Jadwal</i></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
											<th>Id Prodi</th>
                                            <th>Tahun Akademik</th>
<!--                                            <th>Tanggal</th>-->
                                            <th>NIM</th>
                                            <th>Judul</th>
<!--                                            <th>Tempat Penelitian</th>-->
<!--                                            <th>Status</th>-->
                                            <th>Dosen Pembimbing</th>
<!--                                            <th>Upload File</th>-->
                                            <th>Tanggal Ujian</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th>Penguji 1</th>
                                            <th>Penguji 2</th>
                                            <th>Penguji 3</th>
<!--                                            <th>User</th>-->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$no=1;
										$sqlquery = "SELECT j.*, p.*, m.*, d.*, u.* FROM t_judul_jadwal j INNER JOIN t_prodi p 
                                                     ON j.idprodi=p.idprodi INNER JOIN t_mahasiswa m ON j.nim=m.nim INNER JOIN 
                                                     t_dosen d ON j.dosenidpembimbing=d.dosenid INNER JOIN t_user u ON j.userid=u.userid";
										if ($result = mysqli_query($koneksi, $sqlquery)) {
											while ($row = mysqli_fetch_assoc($result)) {
									?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?php echo $row["idprodi"];?></td>
                                            <td><?php echo $row["tahunak"];?></td>
<!--                                            <td>--><?php //echo tgl_indo($row["tanggal"]);?><!--</td>-->
											<td><?php echo $row["nim"];?></td>
											<td><?php echo $row["judul"];?></td>
<!--											<td>--><?php //echo $row["tempatpenelitian"];?><!--</td>-->
<!--											<td>--><?php //echo $row["status"];?><!--</td>-->
											<td><?php echo $row["namadosen"];?></td>
<!--											<td>--><?php //echo $row["uploadfile"];?><!--</td>-->
											<td><?php echo tgl_indo($row["tanggalujian"]);?></td>
											<td><?php echo $row["jammulai"];?></td>
											<td><?php echo $row["jamselesai"];?></td>
											<td><?php echo $row["dosenidpenguji1"];?></td>
											<td><?php echo $row["dosenidpenguji2"];?></td>
											<td><?php echo $row["dosenidpenguji3"];?></td>
<!--											<td>--><?php //echo $row["userid"];?><!--</td>-->
                                            <td>
											<div class="btn-group">
											   <a href="edit_judul_jadwal.php?jadwalid=<?php echo $row['jadwalid'];?>" class="btn btn-xs btn-success" title='Edit'> <i class="fa fa-edit"></i> </a>
											   
											  <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="aksi_judul_jadwal.php?act=delete&jadwalid=<?php echo $row['jadwalid'];?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash-o" title='Hapus'></i> </a>
											</div>
											</td>
                                        </tr>
										<?php
											$no++;
										}
										mysqli_free_result($result);
									}
									mysqli_close($koneksi);
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                     <!-- End  Kitchen Sink -->
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
<?php }
     ?>