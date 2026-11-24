<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DanhMuc</title>
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
    <h1>Danh mục</h1>
    <a class="btn-add" href="index.php?page_layout=themdanhmuc">Thêm danh mục</a>
    <div style=" margin: 20px 0;">

    </div>
    <?php
        $sql = "SELECT * from the_loai";
        $result = mysqli_query($conn,$sql);

    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên Thể Loại</th>
            <th>Chức năng</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_assoc($result))
            {

        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_the_loai'] ?></td>
            <td>
                <a href="index.php?page_layout=capnhatdanhmuc&id=<?php echo $row['id'] ?>" class="capnhat">Cập nhật</a>
                <a href="index.php?page_layout=xoadanhmuc&id=<?php echo $row['id'] ?>" class="xoa">Xóa</a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>