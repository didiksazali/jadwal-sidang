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
                            Data Prodi
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="add_prodi.php" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data Prodi</i></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
											<th>Id Prodi</th>
                                            <th>Nama Prodi</th>
                                            <th>Pejabat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$no=1;
										$sqlquery = "SELECT * FROM t_prodi";
										if ($result = mysqli_query($koneksi, $sqlquery)) {
											while ($row = mysqli_fetch_assoc($result)) {
									?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?php echo $row["idprodi"];?></td>
                                            <td><?php echo $row["namaprodi"];?></td>
											<td><?php echo $row["pejabat"];?></td>
                                            <td>
											<div class="btn-group">
											   <a href="edit_prodi.php?idprodi=<?php echo $row['idprodi'];?>" class="btn btn-xs btn-success" title='Edit'> <i class="fa fa-edit"></i> </a>
											   
											  <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="aksi_prodi.php?act=delete&idprodi=<?php echo $row['idprodi'];?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash-o" title='Hapus'></i> </a>
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