<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật đạo diễn</title>
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
    <?php 
        $id = $_GET['id'];
        $sql = "SELECT * FROM `dao_dien` WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $dao_dien = mysqli_fetch_assoc($result);
    ?>
        <h1>Cập nhật đạo diễn</h1>
        <form class="khoi" action="index.php?page_layout=capnhatdaodien&id=<?php echo $id ?>" method="POST">
             <div class="i-text">
                <input type="text" name="hoten" value="<?php echo $dao_dien['ho_ten'] ?>" id="" placeholder="Họ và tên">
            </div>
            <div class="i-text">
                <input type="date" name="ngaysinh" value="<?php echo $dao_dien['ngay_sinh'] ?>" id="" placeholder="Ngày sinh">
            </div>
            <button>Cập nhật</button>
        </form>
        <?php
            if(isset($_POST['hoten'])&&
               isset($_POST['ngaysinh']))
            {
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                if(!empty($hoten)&&
                    !empty($ngaysinh)){
                    $sql_update = "INSERT INTO `dao_dien`(`ho_ten`, `ngay_sinh`) 
                    VALUES ('$hoten','$ngaysinh')";
            
                    $result_update = mysqli_query($conn,$sql_update);
                    if($result_update){
                        header("Location: index.php?page_layout=daodien");
                    }
                    else{
                        echo "Update đạo diễn thất bại!";
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