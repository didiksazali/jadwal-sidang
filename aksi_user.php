<?php
include 'config.php';

$act=$_GET['act'];

if ($act=='delete'){
	$userid = $_GET['userid'];
	$row = mysqli_query($koneksi, "DELETE FROM t_user WHERE userid = '$userid'");
	header('location:user.php');
}


elseif ($act=='input'){
	$namauser = $_POST["namauser"];
	$password = md5($_POST["password"]);
	$level = $_POST["level"];

	$sql = "INSERT INTO t_user VALUES ('','$namauser','$password','$level')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:user.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
    $userid = $_POST["userid"];
    $namauser = $_POST["namauser"];
    $password = md5($_POST["password"]);
    $level = $_POST["level"];

    if (!empty($_POST["password"])) {
        $sql = "UPDATE t_user SET namauser='$namauser', password='$password', level='$level' WHERE userid='$userid'";

        if(mysqli_query($koneksi, $sql)){
//		mysqli_close($koneksi);
            header('location:user.php');
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("gagal");';
            echo '</script>';
        }
	} else {
        $sql = "UPDATE t_user SET namauser='$namauser', level='$level' WHERE userid='$userid'";

        if(mysqli_query($koneksi, $sql)){
//		mysqli_close($koneksi);
            header('location:user.php');
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("gagal");';
            echo '</script>';
        }
	}


}
?>
