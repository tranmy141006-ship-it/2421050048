<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật danh mục</title>
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
        $sql = "SELECT * FROM `the_loai` WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $the_loai = mysqli_fetch_assoc($result);
    ?>
        <h1>Cập nhật the_loai</h1>
        <form class="khoi" action="index.php?page_layout=capnhatdanhmuc&id=<?php echo $id ?>" method="POST">
            <div class="i-text">
                <input type="text" name="tentheloai" value="<?php echo $the_loai['ten_the_loai'] ?>" id="" placeholder="Tên thể loại">
            </div>
            <button>Cập nhật</button>
        </form>
        <?php
            if(isset($_POST['tentheloai']))
            {
                $tentheloai = $_POST['tentheloai'];
                if(!empty($tentheloai)){
                    $sql_update = "UPDATE `the_loai` SET `ten_the_loai`='$tentheloai' WHERE `id`='$id'";
                    //echo $sql;
                    $result_update = mysqli_query($conn,$sql_update);
                    if($result_update){
                        header("Location: index.php?page_layout=danhmuc");
                    }
                    else{
                        echo "Update danh mục thất bại!";
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