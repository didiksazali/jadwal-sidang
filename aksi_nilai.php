<?php
include 'config.php';

$act=$_GET['act'];

if ($act=='delete'){
	$idnilai = $_GET['idnilai'];
	$row = mysqli_query($koneksi, "DELETE FROM t_nilai WHERE idnilai = '$idnilai'");
	header('location:nilai.php');
}


elseif ($act=='input'){
	$nim = $_POST["nim"];
	$nilai1 = $_POST["nilai1"];
	$nilai2 = $_POST["nilai2"];
	$nilai3 = $_POST["nilai3"];

	$sql = "INSERT INTO t_nilai VALUES ('','$nilai1','$nilai2','$nilai3','$nim')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:nilai.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
    $idnilai = $_POST["idnilai"];
    $nim = $_POST["nim"];
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $nilai3 = $_POST["nilai3"];

        $sql = "UPDATE t_nilai SET nilai1='$nilai1', nilai2='$nilai2', nilai3='$nilai3' WHERE idnilai='$idnilai'";

        if(mysqli_query($koneksi, $sql)){
//		mysqli_close($koneksi);
            header('location:nilai.php');
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("gagal");';
            echo '</script>';
        }


}
?>
