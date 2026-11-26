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
            background-color: #75B9F2;
        }
        .xoa{
            background-color: #C42B1C;
        }
    </style>
</head>
<body>
    <h1>Phim</h1>   
    <div style=" margin: 20px 0;">
        <a style="color: black" class="btn-add" href="index.php?page_layout=themphim">Thêm Phim</a>
    </div>
    <?php
        // $sql = "SELECT * from phim p
        // join dao_dien dd
        // on p.dao_dien_id = dd.id
        // join phim_the_loai ptl
        // on p.id = ptl.phim_id
        // join the_loai tl
        // on tl.id = ptl.the_loai_id ";
        // $result = mysqli_query($conn,$sql);


        $sql = "SELECT p.*, dd.ho_ten, tl.ten_the_loai FROM phim p
        left join dao_dien dd 
        ON p.dao_dien_id = dd.id
        left join phim_the_loai ptl 
        ON p.id = ptl.phim_id
        left join the_loai tl 
        ON tl.id = ptl.the_loai_id";
        $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên Phim</th>
            <th>Quốc Gia</th>
            <th>Đạo diễn</th>
            <th>Năm</th>
            <th>Độ Tuổi</th>
            <th>Thể loại</th>
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
            <td><?php echo $row['ho_ten'] ?></td>
            <td><?php echo $row['nam'] ?></td>
            <td><?php echo $row['do_tuoi'] ?></td>
            <td><?php echo $row['ten_the_loai'] ?></td>
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