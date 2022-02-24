<?php
session_start();

include("../connect.php");
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = md5 ($_POST["password"]);

    $hasil = mysqli_query($connect, "select * from user where username = '$username' and password = '$password'");

    if (mysqli_num_rows($hasil) >= 1) {
        $user = mysqli_fetch_array($hasil);

        if ($user['role']=="admin") {
            $_SESSION["username"] = $username;
            $_SESSION["role"] = "admin";
            header("location:../dashboard/dashboard-admin.php");
        } elseif ($user['role']=="kasir") {
            $_SESSION["username"] = $username;
            $_SESSION["role"] = "kasir";
            header("location:../dashboard/dashboard-kasir.php");
        } elseif ($user['role']=="member") {
            $_SESSION["username"] = $username;
            $_SESSION["role"] = "member";
            $_SESSION["id"] = $user['id'];
            header("location:../dashboard/dashboard-member.php");
        }
    } else {
        echo "<script>alert('Login gagal!');history.go(-1);</script>";
    }
}