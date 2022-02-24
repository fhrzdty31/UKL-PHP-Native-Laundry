<?php
include '../connect.php';
$id = $_GET['id'];
$hapus1 = mysqli_query($connect,"delete from user where id = $id");
$hapus2 = mysqli_query($connect,"delete from member where id = $id");
if (mysqli_affected_rows($connect)){
    echo "<script>alert('Berhasil menghapus akun!');window.location='../dashboard/dashboard-admin.php'</script>";
} else {
    echo "<script>alert('Gagal menghapus akun!');history.go(-1);</script>";
}
?>