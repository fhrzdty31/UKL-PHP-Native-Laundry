<?php
session_start();
if (!isset($_SESSION["username"])&&!isset($_SESSION["role"])){
    header("Location:../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin - Laundry.ku</title>
</head>
<style>
    *{box-sizing: border-box;}
    [class*="col-"]{
        padding: 10px;
        float: left;
        width: 100%;
    }
    @media only screen and (min-width: 768px){
        .col-1{width: 8.33%;}
        .col-2{width: 16.66%;}
        .col-3{width: 25%;}
        .col-4{width: 33.33%;}
        .col-5{width: 41.66%;}
        .col-6{width: 50%;}
        .col-7{width: 58.33%;}
        .col-8{width: 66.66%;}
        .col-9{width: 75%;}
        .col-10{width: 83.33%;}
        .col-11{width: 91.66%;}
        .col-12{width: 100%;}
    }
    @media only screen and (min-width: 500px){
        .col-s-1{width: 8.33%;}
        .col-s-2{width: 16.66%;}
        .col-s-3{width: 25%;}
        .col-s-4{width: 33.33%;}
        .col-s-5{width: 41.66%;}
        .col-s-6{width: 50%;}
        .col-s-7{width: 58.33%;}
        .col-s-8{width: 66.66%;}
        .col-s-9{width: 75%;}
        .col-s-10{width: 83.33%;}
        .col-s-11{width: 91.66%;}
        .col-s-12{width: 100%;}
    }
    body{
        background: linear-gradient(to right, #3798ed, #1387ed, #5daef5, #1f80ff, #4d9aff);
        font-size: 20px;
        color: #000000;
        font-family: monospace;
    }
    .content{
        width: 90%;
        margin: 10px auto;
    }
    header{
        background-color: white;
        padding: 10px;
        border: 1px solid #f0f0f0;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    header h1.judul{
        text-align: center;
        font-family: monospace;
    }
    header h5.deskripsi{
        text-align: center;
    }
    .role{
        margin-top: 10px;
        margin-bottom: 15px;
        width: 100%;
        text-align: center;
    }
    .menu{
        background-color: #87cefa;
        border: 1px solid #87cefa;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    div.menu ul{
        list-style: none;
        overflow: hidden;
    }
    div.menu ul li{
        float: left;
        text-transform: uppercase;
    }
    div.menu ul li a{
        display: block;
        padding: 0 20px;
        text-decoration: none;
        color: #2c2c2c;
        font-family: sans-serif;
        font-size: 15px;
        font-weight: 400;
        transition: all 0.1s ease-in-out;;
    }

    div.menu ul li a:hover, div.menu ul li a.hoverover {
        cursor: pointer;
        color:#ffffff;
    }
    div.badan{
        background-color: white;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    div.halaman{
        padding: 10px;
    }
    footer p{
        font-size: 15px;
        color: #cfcfcf;
    }
    button{
        color: #ffffff;
        padding: 10px;
        border: 1px;
        border-radius: 10px;
        height: 40px;
        font-weight: bolder;
        letter-spacing: 1px:
    }
    .btn1{
        float: right;
        background: red;
        border: red;
        width: 75px;
    }
    .btn2{
        float: center;
        background: #0dc200;
        border: #0dc200;
        height: 40px;
        width: 100%;
        font-size: 15px;
    }
    .btn3{
        background: #0dc200;
        border: #0dc200;
        width: 75px;
        height: 35px;
    }
    .btn4{
        background: #ff2b2b;
        border: #ff2b2b;
        width: 75px;
        height: 35px;
    }
</style>
<body>
    <div class="content">
        <header>
            <h1 class="judul">Laundry.ku</h1>
            <h5 class="deskripsi">Mitra laundry online cepat dan terpercaya</h5>
            <div class="menu">
                <ul>
                    <li><a href="dashboard-admin.php?halaman=user"><b>Akun</b></a></li>
                    <li><a href="dashboard-admin.php?halaman=paket"><b>Paket</b></a></li>
                    <li><a href="dashboard-admin.php?halaman=outlet"><b>Outlet</b></a></li>
                    <li><a href="dashboard-admin.php?halaman=transaksi"><b>Transaksi</b></a></li>
                    <li><a href="dashboard-admin.php?halaman=laporan"><b>Laporan</b></a></li>
                </ul>
            </div>
        </header>
        <div class="badan">
            <?php
            if (isset($_GET['halaman'])){
                switch ($_GET['halaman']) {
                    case 'user' :
                        include "../user/user.php";
                        break;
                    case 'paket' :
                        include "../paket/paket.php";
                        break;
                    case 'outlet' :
                        include "../outlet/outlet.php";
                        break;
                    case 'transaksi' :
                        include "../transaksi/transaksi.php";
                        break;
                    case 'laporan' :
                        include "../detil_transaksi/laporan.php";
                        break;
                    default :
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                }
            } else {
                include "../user/user.php";
            }
            ?>
        </div>
        <footer>
            <div class="col-9">
                <p>&copy; 2022 Fahreza Ditya Alfandry</p>
            </div>
            <div class="col-3">
                <button type="submit" name="logout" class="btn1" onClick="out()">Logout</button>
                <script>
                    function out(){
                        alert('Logout !!!');window.location='../logout.php'
                    }
                </script>
            </div>
        </footer>
    </div>
</body>
</html>