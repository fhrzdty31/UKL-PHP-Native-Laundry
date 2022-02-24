<?php
include("../connect.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jk = $_POST['jk'];
$role = $_POST['role'];

$result1 = mysqli_query($connect,"update user set nama = '$nama', username = '$username', password = '$password', role = '$role' where id = $id");
$result2 = mysqli_query($connect,"update member set nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jk', telepon = '$telepon' where id = $id");

if (mysqli_affected_rows($connect)) {
    echo "<script>alert('Berhasil update akun!');window.location='../dashboard/dashboard-admin.php'</script>";
} else {
    echo "<script>alert('Gagal update akun!');history.go(-1);</script>";
}
?>