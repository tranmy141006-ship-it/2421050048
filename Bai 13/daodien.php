<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đạo diễn</title>
    <style>
        table{
            width: 25%;
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
            background-color: #75B9F2;
        }
        .xoa{
            background-color: #C42B1C;
        }
    </style>
</head>
<body>
    <h1>Đạo diễn</h1>
    <a class="btn-add" href="index.php?page_layout=themdaodien">Thêm đạo diễn</a>
    <div style=" margin: 20px 0;">

    </div>
    <?php
        $sql = "SELECT * from dao_dien";
        $result = mysqli_query($conn,$sql);

    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_assoc($result))
            {

        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ho_ten'] ?></td>
            <td><?php echo $row['ngay_sinh'] ?></td>
            <td>
                <a href="index.php?page_layout=capnhatdaodien&id=<?php echo $row['id'] ?>" class="capnhat">Cập nhật</a>
                <a href="index.php?page_layout=xoadaodien&id=<?php echo $row['id'] ?>" class="xoa">Xóa</a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>