<?php
include 'config.php';

$act=$_GET['act'];

if ($act=='delete'){
	$idprodi = $_GET['idprodi'];
	$row = mysqli_query($koneksi, "DELETE FROM t_prodi WHERE idprodi = '$idprodi'");
	header('location:prodi.php');
}


elseif ($act=='input'){
	$idprodi = $_POST["idprodi"];
	$namaprodi = $_POST["namaprodi"];
	$pejabat = $_POST["pejabat"];

	$sql = "INSERT INTO t_prodi VALUES ('$idprodi','$namaprodi','$pejabat')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:prodi.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
    $idprodi = $_POST["idprodi"];
    $namaprodi = $_POST["namaprodi"];
    $pejabat = $_POST["pejabat"];

        $sql = "UPDATE t_prodi SET namaprodi='$namaprodi', pejabat='$pejabat' WHERE idprodi='$idprodi'";

        if(mysqli_query($koneksi, $sql)){
//		mysqli_close($koneksi);
            header('location:prodi.php');
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("gagal");';
            echo '</script>';
        }


}
?>
