<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm đạo diễn</title>
    <style>
    .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
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
    <h1>Thêm Đạo diễn</h1>
        <form class="khoi" action="index.php?page_layout=themdaodien" method="POST">
            <div class="i-text">
                <input type="text" name="hoten"  id="" placeholder="Họ và tên">
            </div>
            <div class="i-text">
                <input type="date" name="ngaysinh"  id="" placeholder="Ngày sinh">
            </div>
            <button>Thêm</button>
        </form>
        <?php
            if(isset($_POST['hoten'])&&
               isset($_POST['ngaysinh']))
            {
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                if(!empty($hoten)&&
                    !empty($ngaysinh)){
                    $sql = "INSERT INTO `dao_dien`(`ho_ten`, `ngay_sinh`) 
                    VALUES ('$hoten','$ngaysinh')";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        header("Location: index.php?page_layout=daodien");
                    }
                    else{
                        echo "Thêm đạo diễn thất bại!";
                    }
                }
                else{
                    //người dùng nhập thiếu thông tin
                    echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            }
            
        ?>

</body>
</html>