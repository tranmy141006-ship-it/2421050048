<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim</title>
    <style>
       table{
            width: 100%;
        }
        tr,th,td{
            border: 1px solid black;
        }
        .btn-add{
            background-color: #98C379;
            padding: 10px;
            border-radius: 10px;
        }
        .capnhat{
            background-color: #98C379;
        }
        .xoa{
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Phim</h1>
    <a style="color: black" class="btn-add" href="index.php?page_layout=themphim">Thêm Phim</a>
    <div style=" margin: 20px 0;">

    </div>
    <?php
        $sql = "SELECT * from phim";
        $result = mysqli_query($conn,$sql);

    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên Phim</th>
            <th>Quốc Gia</th>
            <th>Năm</th>
            <th>Độ Tuổi</th>
            <th>Mô Tả</th>
            <th>Chức năng</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_assoc($result))
            {

        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_phim'] ?></td>
            <td><?php echo $row['quoc_gia'] ?></td>
            <td><?php echo $row['nam'] ?></td>
            <td><?php echo $row['do_tuoi'] ?></td>
            <td><?php echo $row['mo_ta'] ?></td>
            <td>
                <a class="capnhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row['id'] ?>">Cập nhật</a>
                <a class="xoa" href="index.php?page_layout=xoaphim&id=<?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>