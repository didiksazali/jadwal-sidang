<?php
session_start();
if (!empty($_SESSION['namauser']) AND !empty($_SESSION['password'])) {
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
                            Data Nilai
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="add_nilai.php" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data Nilai</i></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
											<th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Nilai 1</th>
                                            <th>Nilai 2</th>
                                            <th>Nilai 3</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$no=1;
										$sqlquery = "SELECT n.*, m.* FROM t_nilai n INNER JOIN t_mahasiswa m ON 
                                                     n.nim=m.nim";
										if ($result = mysqli_query($koneksi, $sqlquery)) {
											while ($row = mysqli_fetch_assoc($result)) {
									?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?php echo $row["nim"];?></td>
                                            <td><?php echo $row["namamhs"];?></td>
                                            <td><?php echo $row["nilai1"];?></td>
                                            <td><?php echo $row["nilai2"];?></td>
                                            <td><?php echo $row["nilai3"];?></td>
                                            <td>
											<div class="btn-group">
											   <a href="edit_nilai.php?idnilai=<?php echo $row['idnilai'];?>" class="btn btn-xs btn-success" title='Edit'> <i class="fa fa-edit"></i> </a>
											   
											  <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="aksi_nilai.php?act=delete&idnilai=<?php echo $row['idnilai'];?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash-o" title='Hapus'></i> </a>
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