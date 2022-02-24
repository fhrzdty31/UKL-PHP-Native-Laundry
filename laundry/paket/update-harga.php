<?php
include("../connect.php");
$id = $_POST['id'];
$harga = $_POST['harga'];

$result = mysqli_query($connect,"update paket set harga = '$harga' where id = '$id'");

if (mysqli_affected_rows($connect)) {
    echo "<script>alert('Berhasil update harga!');window.location='../dashboard/dashboard-admin.php?halaman=paket'</script>";
} else {
    echo "<script>alert('Gagal update harga!');history.go(-1);</script>";
}
?>