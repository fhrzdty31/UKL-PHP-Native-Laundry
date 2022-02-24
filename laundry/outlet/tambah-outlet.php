<?php
include("../connect.php");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$result = mysqli_query($connect,"insert into outlet (nama, alamat) values ('$nama', '$alamat')");

if (mysqli_affected_rows($connect) > 0) {
    header("location:../dashboard/dashboard-admin.php?halaman=outlet");
} else {
    echo "<script>alert('Gagal menambah outlet!');history.go(-1);</script>";
}
?>