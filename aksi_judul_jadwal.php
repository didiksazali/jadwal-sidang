<?php
include 'config.php';
session_start();

$act=$_GET['act'];

if ($act=='delete'){
	$jadwalid = $_GET['jadwalid'];
	$row = mysqli_query($koneksi, "DELETE FROM t_judul_jadwal WHERE jadwalid = '$jadwalid'");
	header('location:judul_jadwal.php');
}


elseif ($act=='input'){
	$idprodi = $_POST["idprodi"];
	$tahunak = $_POST["tahunak"];
	$nim = $_POST["nim"];
	$judul = $_POST["judul"];
	$tempatpenelitian = $_POST["tempatpenelitian"];
	$status = $_POST["status"];
	$dosenidpembimbing = $_POST["dosenidpembimbing"];
	$tanggalujian = $_POST["tanggalujian"];
	$jammulai = $_POST["jammulai"];
	$jamselesai = $_POST["jamselesai"];
	$dosenidpenguji1 = $_POST["dosenidpenguji1"];
	$dosenidpenguji2 = $_POST["dosenidpenguji2"];
	$dosenidpenguji3 = $_POST["dosenidpenguji3"];
	$userid = $_SESSION['userid'];

    $nama_file          = $_FILES['uploadfile']['name'];
    $ukuran_file        = $_FILES['uploadfile']['size'];
    $tipe_file          = $_FILES['uploadfile']['type'];
    $tmp_file           = $_FILES['uploadfile']['tmp_name'];

    // tentuka extension yang diperbolehkan
    $allowed_extensions = array('pdf','word');

    // Set path folder tempat menyimpan gambarnya
    $path_file          = "file/".$nama_file;

    // check extension
    $file               = explode(".", $nama_file);
    $extension          = array_pop($file);

    // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
    if (in_array($extension, $allowed_extensions)) {
        // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
        if ($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
            // Proses upload
            if (move_uploaded_file($tmp_file, $path_file)) {

                // perintah query untuk menyimpan data ke tabel users
                $query = mysqli_query($koneksi, "INSERT INTO t_judul_jadwal VALUES ('','$idprodi','$tahunak','$hari_ini','$nim','$judul','$tempatpenelitian','$status',
                                      '$dosenidpembimbing','$nama_file','$tanggalujian','$jammulai','$jamselesai','$dosenidpenguji1','$dosenidpenguji2','$dosenidpenguji3'
                                      ,'$userid')")
                or die('Ada kesalahan pada query insert : ' . mysqli_error($koneksi));

                if ($query) {
                    header('location:judul_jadwal.php');
                }
            } else {
                echo "gagal";
            }
        }
    }


}


elseif ($act=='update'){
    $jadwalid = $_POST["jadwalid"];
    $idprodi = $_POST["idprodi"];
    $tahunak = $_POST["tahunak"];
    $nim = $_POST["nim"];
    $judul = $_POST["judul"];
    $tempatpenelitian = $_POST["tempatpenelitian"];
    $status = $_POST["status"];
    $dosenidpembimbing = $_POST["dosenidpembimbing"];
    $tanggalujian = $_POST["tanggalujian"];
    $jammulai = $_POST["jammulai"];
    $jamselesai = $_POST["jamselesai"];
    $dosenidpenguji1 = $_POST["dosenidpenguji1"];
    $dosenidpenguji2 = $_POST["dosenidpenguji2"];
    $dosenidpenguji3 = $_POST["dosenidpenguji3"];
    $userid = $_SESSION['userid'];

    $nama_file          = $_FILES['uploadfile']['name'];
    $ukuran_file        = $_FILES['uploadfile']['size'];
    $tipe_file          = $_FILES['uploadfile']['type'];
    $tmp_file           = $_FILES['uploadfile']['tmp_name'];

    // tentuka extension yang diperbolehkan
    $allowed_extensions = array('pdf','word');

    // Set path folder tempat menyimpan gambarnya
    $path_file          = "file/".$nama_file;

    // check extension
    $file               = explode(".", $nama_file);
    $extension          = array_pop($file);

    if (!empty($_FILES['uploadfile']['name'])) {
        if (in_array($extension, $allowed_extensions)) {
            if($ukuran_file <= 1000000) {
                if(move_uploaded_file($tmp_file, $path_file)) {
                    $query = mysqli_query($koneksi, "UPDATE t_judul_jadwal SET 
			                    													idprodi  = '$idprodi',
			                    													tahunak  = '$tahunak',
			                    													nim     = '$nim',
			                    													judul     = '$judul',
			                    													tempatpenelitian     = '$tempatpenelitian',
			                    													status     = '$status',
			                    													dosenidpembimbing     = '$dosenidpembimbing',
			                    													uploadfile     = '$nama_file',
			                    													tanggalujian     = '$tanggalujian',
			                    													jammulai     = '$jammulai',
			                    													jamselesai     = '$jamselesai',
			                    													dosenidpenguji1     = '$dosenidpenguji1',
			                    													dosenidpenguji2     = '$dosenidpenguji2',
			                    													dosenidpenguji3     = '$dosenidpenguji3'
			                                                                  WHERE jadwalid  = '$jadwalid'")
                    or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));

                    if ($query) {
                        header("location: judul_jadwal.php");
                    }
                } else {
                    echo "gagal a";
                }
            } else {
                echo "gagal b";
            }
        } else {
            echo "gagal c";
        }
    }
    else {

                    $query = mysqli_query($koneksi, "UPDATE t_judul_jadwal SET 
			                    													idprodi  = '$idprodi',
			                    													tahunak  = '$tahunak',
			                    													nim     = '$nim',
			                    													judul     = '$judul',
			                    													tempatpenelitian     = '$tempatpenelitian',
			                    													status     = '$status',
			                    													dosenidpembimbing     = '$dosenidpembimbing',
			                    													tanggalujian     = '$tanggalujian',
			                    													jammulai     = '$jammulai',
			                    													jamselesai     = '$jamselesai',
			                    													dosenidpenguji1     = '$dosenidpenguji1',
			                    													dosenidpenguji2     = '$dosenidpenguji2',
			                    													dosenidpenguji3     = '$dosenidpenguji3'
			                                                                  WHERE jadwalid  = '$jadwalid'")
                    or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));

                    if ($query) {

                        header("location: judul_jadwal.php");
                } else {
                    echo "gagal 1";
                }

    }



}
?>
