<?php
// panggil file untuk koneksi ke database
require_once "config.php";

// ambil data hasil submit dari form
$username = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['username'])))));
$password = md5(mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['password']))))));

// ambil data dari tabel admin untuk pengecekan berdasarkan inputan username dan passrword
$query = mysqli_query($koneksi, "SELECT * FROM t_user WHERE namauser='$username' AND password='$password' ")
or die('Ada kesalahan pada query admin: '.mysqli_error($koneksi));
$rows  = mysqli_num_rows($query);

// jika data ada, jalankan perintah untuk membuat session
if ($rows > 0) {
    $data  = mysqli_fetch_assoc($query);

    session_start();
    $_SESSION['userid']   = $data['userid'];
    $_SESSION['namauser']  = $data['namauser'];
    $_SESSION['password']  = $data['password'];

    // lalu alihkan ke halaman admin
    header("Location: home.php");
}

// jika data tidak ada, alihkan ke halaman login dan tampilkan pesan = 1
else {
    header("Location: index.php?alert=1");
}

?>