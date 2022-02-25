<?php
$connect = mysqli_connect("127.0.0.1", "root", "admin001", "laundry");
if(!$connect){
    echo "KONEKSI KE DATABASE GAGAL : " . mysqli_connect_error();
} else {
    echo "Halooooooo"
}
?>