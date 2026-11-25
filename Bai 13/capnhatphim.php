<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapNhatPhim</title>
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
        $sql = "SELECT * FROM `phim` WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $phim = mysqli_fetch_assoc($result);
    ?>
        <h1>Cập nhật phim</h1>
        <form class="khoi" action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="POST">
            <div class="i-text">
                <input type="text" name="tenPhim" value="<?php echo $phim['ten_phim'] ?>" id="" placeholder="Tên Phim">
            </div>
            <div class="i-text">
                <input type="text" name="quocGia" value="<?php echo $phim['quoc_gia'] ?>" id="" placeholder="Quốc Gia">
            </div>
            <div class="i-text">
                <input type="date" name="nam" value="<?php echo $phim['nam'] ?>" id="" placeholder="Năm">
            </div>
            <div class="i-text">
                <input type="number" name="doTuoi" value="<?php echo $phim['do_tuoi'] ?>" id="" placeholder="Độ Tuổi">
            </div>
            <div class="i-text">
                <input type="text" name="moTa" value="<?php echo $phim['mo_ta'] ?>" id="" placeholder="Mô Tả">
            </div>
        
            <button>Cập nhật</button>
        </form>
        <?php
            if(isset($_POST['tenPhim']) && 
            isset($_POST['quocGia']) && 
            isset($_POST['nam']) && 
            isset($_POST['doTuoi']) &&
            isset($_POST['moTa']))
            {
                $tenPhim = $_POST['tenPhim'];
                $quocGia = $_POST['quocGia'];
                $nam = $_POST['nam'];
                $doTuoi = $_POST['doTuoi'];
                $moTa = $_POST['moTa'];
                if(!empty($tenPhim) && 
                    !empty($quocGia) && 
                    !empty($nam) && 
                    !empty($doTuoi) &&
                    !empty($moTa)
                    ){
                    $sql_update = "UPDATE `phim` SET `ten_phim`='$tenPhim',`quoc_gia`='$quocGia',`nam`='$nam',
                    `do_tuoi`='$doTuoi',`mo_ta`='$moTa' WHERE `id`='$id'";
                    //echo $sql;
                    $result_update = mysqli_query($conn,$sql_update);
                    if($result_update){
                        header("Location: index.php?page_layout=phim");
                    }
                    else{
                        echo "Update phim thất bại!";
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