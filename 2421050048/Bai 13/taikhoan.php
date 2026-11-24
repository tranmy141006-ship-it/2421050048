<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
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
    <h1>Tài khoản</h1>
    <a style="color: black" class="btn-add" href="index.php?page_layout=themtaikhoan">Thêm tài khoản</a>
    <div style=" margin: 20px 0;">

    </div>
    <?php
    $sql = "SELECT * from nguoi_dung";
    $result = mysqli_query($conn,$sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>email</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th> Số điện thoại</th>
            <th>Giới tính</th>
            <th>Chức năng</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
                {

            
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_dang_nhap'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['ho_va_ten'] ?></td>
            <td><?php echo $row['ngay_sinh'] ?></td>
            <td><?php echo $row['so_dien_thoai'] ?></td>
            <td><?php echo $row['gioi_tinh']==true?"Nam":"Nữ" ?></td>
            <td>
                <a class="capnhat" href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']?>">Cập nhật</a>
                <a class="xoa" href="index.php?page_layout=xoataikhoan&id=<?php echo $row['id']?>">Xóa</a>
            </td>
        </tr>
        <?php
                }
        ?>
    </table>

</body>
</html>