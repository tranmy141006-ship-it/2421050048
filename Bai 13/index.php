<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
            display: flex;
            gap: 50px;
            background-color: #0765FF;
            padding: 20px;
        }
        a{
            text-decoration: none;
            color:white;
        }
    </style>
</head>
<body>
    <?php
        ob_start();
        session_start();
        if(!isset($_SESSION['dangnhap']) && $_SESSION['dangnhap'] = "thanhcong"){
            header("Location: dangnhap.php");

        }
        include 'connect.php';
        ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page_layout=taikhoan">Tài khoản</a></li>
                <li><a href="index.php?page_layout=danhmuc">Danh mục</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
                <li><a href="index.php?page_layout=daodien">Đạo diễn</a></li>
            </ul>
        </nav>
    </header>

    <?php
        if(isset($_GET['page_layout'])){
            $page = $_GET['page_layout'];
            switch($page){
                case'trangchu':
                    include 'trangchu.php';
                    break;
                 case'taikhoan':
                    include 'taikhoan.php';
                    break;
                case'danhmuc':
                    include 'danhmuc.php';
                    break;
                case'phim':
                    include 'phim.php';
                    break;
                case'daodien':
                    include 'daodien.php';
                    break; 
                case'themtaikhoan':
                    include 'themtaikhoan.php';
                    break;
                case'capnhattaikhoan':
                    include 'capnhattaikhoan.php';
                    break;
                case'xoataikhoan':
                    include 'xoataikhoan.php';
                    break;
                case'themdanhmuc':
                    include 'themdanhmuc.php';
                    break;
                case'capnhatdanhmuc':
                    include 'capnhatdanhmuc.php';
                    break;
                case'xoadanhmuc':
                    include 'xoadanhmuc.php';
                    break;  
                case'themphim':
                    include 'themphim.php';
                    break;
                case'capnhatphim':
                    include 'capnhatphim.php';
                    break;
                case 'xoaphim':
                    include 'xoaphim.php';
                    break;
                case'themdaodien':
                    include 'themdaodien.php';
                    break;
                case'capnhatdaodien':
                    include 'capnhatdaodien.php';
                    break;
                case 'xoadaodien':
                    include 'xoadaodien.php';
                    break;           
            }
        }
    ?>

</body>
</html>