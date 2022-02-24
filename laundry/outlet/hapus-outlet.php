<?php
include '../connect.php';
$id = $_GET['id'];

$hapus = mysqli_query($connect,"delete from outlet where id = $id");

if (mysqli_affected_rows($connect)){
    echo "<script>alert('Berhasil menghapus outlet!');window.location='../dashboard/dashboard-admin.php?halaman=outlet'</script>";
} else {
    echo "<script>alert('Gagal menghapus outlet!');history.go(-1);</script>";
}
?>