<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laundy.ku</title>
       
</head>
<style>
    *{box-sizing: border-box;}
    [class*="col-"]{
        padding: 10px;
        float: right;
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
        width: 500px;
        margin: 0 auto;
    }
    .text{
        font-size: 37.5px;
        font-family: monospace;
        text-align: center;
        line-height: 0.9;
    }
    .form-control{
        padding: 20px;
        font-size: 15px;
        width: 100%;
        height: 25px;
        border: 2px solid black;
        border-radius: 10px;
    }
    .button{
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
    fieldset{
        border: solid white;
        border-radius: 30px;
        background: white;
    }
</style>

<body class="bg">
    <div class="container" style=margin-top:100px;>
        <fieldset>
            <p class="text"><b>Login<br>Laundry.ku</b></p>
            <form action="login-proses.php" method="POST">
                <div class="col-12">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="col-12">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="col-3">
                <button type="submit" name="login" class="button">Login</button>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>
