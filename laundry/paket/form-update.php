<?php
session_start();
if (!isset($_SESSION["username"])&&!isset($_SESSION["role"])){
    header("Location:../login/login.php");
}
include '../connect.php';
$id = $_GET['id'];
$query = "select * from paket where id = $id";
$hasil = mysqli_query($connect, $query);
$akun = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry.ku</title>
</head>
<style>
    *{box-sizing: border-box;}
    [class*="col-"]{
        padding: 10px;
        float: left;
        width: 100%;
    }
    @media only screen and (min-width: 768px){
        /*untuk dekstop*/
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
    .bg {
        background: linear-gradient(to right, #3798ed, #1387ed, #5daef5, #1f80ff, #4d9aff);
    }
    .container{
        width: 90%;
        margin: 10px auto;
    }
    header{
        background-color: white;
        padding: 5px auto;
        border: 1px solid #f0f0f0;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    header h1.judul{
        text-align: center;
        font-family: monospace;
    }
    fieldset{
        background-color: white;
        padding: 5px auto;
        border: 1px solid #f0f0f0;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    .label{
        padding: 20px;
        font-size: 20px;
        font-weight: bold;
    }
    .form-control{
        padding: 20px;
        font-size: 15px;
        width: 100%;
        height: 25px;
        border: 2px solid black;
        border-radius: 10px;
    }
    select{
        padding: 5px;
        font-size: 15px;
        width: 100%;
        height: 45px;
        border: 2px solid black;
        border-radius: 10px;
    }
    label{
        font-size: 18px;
        font-weight: bold;
        margin-right: 20px;
    }
    .btn{
        float: right;
    }
    button{
        background: green;
        color: #fff;
        padding: 10px;
        border: 1px solid green;
        width: 100%;
        height: 40px;
        border-radius: 10px;
        font-weight: bolder;
        letter-spacing: 1px;
    }
</style>

<body class="bg">
    <div class="container">
        <header>
            <h1 class="judul">Laundry.ku</h1>
        </header>
        <fieldset>
            <form action="update-harga.php" method="POST">
                <br>
                <div class="col-2 label">ID</div>
                <div class="col-10">
                    <input type="text" name="id" value="<?php echo $akun['id'] ?>" class="form-control" placeholder="ID" readonly>
                </div>
                <div class="col-2 label">Harga</div>
                <div class="col-10">
                    <input type="text" name="harga" value="<?php echo $akun['harga'] ?>" class="form-control" placeholder="Harga" required>
                </div>
                <div class="col-2 btn">
                <button type="submit" name="update">Update</button>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>
