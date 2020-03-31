<?php
include 'config.php';

$act=$_GET['act'];

if ($act=='delete'){
	$idmhs = $_GET['idmhs'];
	$row = mysqli_query($koneksi, "DELETE FROM t_mahasiswa WHERE idmhs = '$idmhs'");
	header('location:mahasiswa.php');
}


elseif ($act=='input'){
	$nim = $_POST["nim"];
	$namamhs = $_POST["namamhs"];
	$alamat = $_POST["alamat"];
	$idprodi = $_POST["idprodi"];
	$handphone = $_POST["handphone"];

	$sql = "INSERT INTO t_mahasiswa VALUES ('','$nim','$namamhs','$alamat','$idprodi','$handphone')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:mahasiswa.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
    $idmhs = $_POST["idmhs"];
    $nim = $_POST["nim"];
    $namamhs = $_POST["namamhs"];
    $alamat = $_POST["alamat"];
    $idprodi = $_POST["idprodi"];
    $handphone = $_POST["handphone"];

        $sql = "UPDATE t_mahasiswa SET nim='$nim', namamhs='$namamhs', alamat='$alamat', idprodi='$idprodi', handphone='$handphone' 
                WHERE idmhs='$idmhs'";

        if(mysqli_query($koneksi, $sql)){
//		mysqli_close($koneksi);
            header('location:mahasiswa.php');
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("gagal");';
            echo '</script>';
        }


}
?>
