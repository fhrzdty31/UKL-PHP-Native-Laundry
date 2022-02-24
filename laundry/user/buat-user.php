<?php
include("../connect.php");
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jk = $_POST['jk'];
$role = $_POST['role'];

$result1 = mysqli_query($connect,"insert into user (nama, username, password, role) values ('$nama', '$username', '$password', '$role')");
$result2 = mysqli_query($connect,"insert into member (nama, alamat, jenis_kelamin, telepon) values ('$nama', '$alamat', '$jk', '$telepon')");

if (mysqli_affected_rows($connect) > 0) {
    header("location:../dashboard/dashboard-admin.php");
} else {
    echo "<script>alert('Gagal membuat akun!');history.go(-1);</script>";
}
?>