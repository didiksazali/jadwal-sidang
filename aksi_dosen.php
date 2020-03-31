<?php
include 'config.php';

$act=$_GET['act'];

if ($act=='delete'){
	$dosenid = $_GET['dosenid'];
	$row = mysqli_query($koneksi, "DELETE FROM t_dosen WHERE dosenid = '$dosenid'");
	header('location:dosen.php');
}


elseif ($act=='input'){
	$namadosen = $_POST["namadosen"];
	$alamat = $_POST["alamat"];
	$handphone = $_POST["handphone"];

	$sql = "INSERT INTO t_dosen VALUES ('','$namadosen','$alamat','$handphone')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:dosen.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
    $dosenid = $_POST["dosenid"];
    $namadosen = $_POST["namadosen"];
    $alamat = $_POST["alamat"];
    $handphone = $_POST["handphone"];

        $sql = "UPDATE t_dosen SET namadosen='$namadosen', alamat='$alamat', handphone='$handphone' WHERE dosenid='$dosenid'";

        if(mysqli_query($koneksi, $sql)){
//		mysqli_close($koneksi);
            header('location:dosen.php');
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("gagal");';
            echo '</script>';
        }


}
?>
