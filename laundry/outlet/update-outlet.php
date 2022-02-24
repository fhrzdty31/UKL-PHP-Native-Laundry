<?php
include("../connect.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$result = mysqli_query($connect,"update outlet set nama = '$nama', alamat = '$alamat' where id = $id");

if (mysqli_affected_rows($connect)) {
    echo "<script>alert('Berhasil update outlet!');window.location='../dashboard/dashboard-admin.php?halaman=outlet'</script>";
} else {
    echo "<script>alert('Gagal update outlet!');history.go(-1);</script>";
}
?>