<!DOC<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        input{
            padding:5px 0;
            margin:10px 0;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="khoi">
        <div style="width: 80% ; margin: auto; text-align:center" class=""  >
            <h1>Đăng nhập</h1>
            <form action="dangnhap.php" method="POST">
                <input type="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
                <input type="password" name="matKhau" id="" placeholder="Mật khẩu">
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['tenDangNhap']) && isset($_POST['matKhau'])){
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            if($tenDangNhap == "admin" && $matKhau == "123"){
                header("location: trangchu.php");
            }
            else{
                echo "Tên đăng nhập hoặc mật khẩu không chính xác";
            }
              
        }

    ?>
</body>
</html>
