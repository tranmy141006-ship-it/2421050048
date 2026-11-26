<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Phim</title>
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
        .i-text select {
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
        <h1>Thêm phim</h1>
        <form class="khoi" action="index.php?page_layout=themphim" method="POST" enctype="multipart/form-data">
            <div class="i-text">
                <input type="text" name="tenPhim"  id="" placeholder="Tên Phim">
            </div>
            <div class="i-text">
                <input type="text" name="quocGia"  id="" placeholder="Quốc Gia">
            </div>
            <?php
                $sqlTheLoai = " select * from the_loai";
                $result = mysqli_query($conn,$sqlTheLoai);
            ?>
            <div class="i-text">
                <select name="theLoai" id="">
                    <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['ten_the_loai']?></option>
                    <?php
                         }
                    ?>   
                </select>
            </div>
            
            <?php
                $sqlDaoDien = " select * from dao_dien";
                $result = mysqli_query($conn,$sqlDaoDien);
            ?>
            <div class="i-text">
                <select name="daoDienId" id="">
                    <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['ho_ten']?></option>
                    <?php
                         }
                    ?>   
                </select>
            </div>
            <div class="i-text">
                <input type="date" name="nam" id="" placeholder="Năm">
            </div>
            <div class="i-text">
                <input type="number" name="doTuoi" id="" placeholder="Độ Tuổi">
            </div>
            <!-- <div class="i-text">
                <input type="text" name="trailer" id="" placeholder="Trailer">
            </div>
            <div class="i-text">
                <input type="text" name="poster" id="" placeholder="Poster">
            </div> -->
            <div class="i-text">
                <input type="text" name="moTa" id="" placeholder="Mô Tả">
            </div>
        
            <button>Thêm</button>
        </form>
        
        <?php
            if(isset($_POST['tenPhim']) &&
            isset($_POST['quocGia']) &&
            isset($_POST['theLoai']) &&
            isset($_POST['daoDienId']) &&
            isset($_POST['nam']) &&
            isset($_POST['doTuoi']) &&
            isset($_POST['moTa'])
            //  &&
            // isset($_POST['trailer']) &&
            // isset($_POST['poster'])
            )
            {
                $tenPhim = $_POST['tenPhim'];
                $quocGia = $_POST['quocGia'];
                $theLoai = $_POST['theLoai'];
                $dao_dien_id = $_POST['daoDienId'];
                $nam = $_POST['nam'];
                $doTuoi = $_POST['doTuoi'];
                // $traile = $_POST['trailer'];
                // $poster = $_POST['poster'];
                $moTa = $_POST['moTa'];

                if(!empty($tenPhim) &&
                !empty($quocGia) &&
                !empty($theLoai) &&
                !empty($dao_dien_id) &&
                !empty($nam) &&
                !empty($doTuoi) &&
                // !empty($trailer) &&
                // !empty($poster) &&
                !empty($moTa))
                {
                    $sqlThem = "INSERT INTO phim(ten_phim, quoc_gia, dao_dien_id, nam, do_tuoi, mo_ta)
                    VALUES('$tenPhim','$quocGia','$dao_dien_id','$nam','$doTuoi','$moTa')";

                    $result_update = mysqli_query($conn, $sqlThem);

                    if($result_update)
                    {
                        $phimIdMoi = mysqli_insert_id($conn);

                        $sqlThemTheLoai = "INSERT INTO phim_the_loai
                        (phim_id, the_loai_id)
                        VALUES ('$phimIdMoi', '$theLoai')";

                        $resultTheLoai = mysqli_query($conn, $sqlThemTheLoai);

                        if($resultTheLoai)
                        {
                            header("Location: index.php?page_layout=phim");
                            exit();
                        }
                        else
                        {
                            echo "Lỗi thêm thể loại: " . mysqli_error($conn);
                        }
                    }
                    else
                    {
                        echo "Lỗi thêm phim: " . mysqli_error($conn);
                    }
                }
                else
                {
                    echo "<p style='color:red'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            }
        ?>

</body>
</html>