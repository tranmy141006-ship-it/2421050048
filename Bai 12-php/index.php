<h1>Đây là file index.php</h1>
<?php
    //Nội dung php đặt ở vị trí này
    echo "Hello world! <br>";
    //biến:$Tên biến = giá trị;
    $hoTen = "Ngoc Anh";
    $tuoi = 29;
    //để nối chuỗi trong php dùng dấu .
    echo $hoTen." ".$tuoi . "<br>";

    //strlen() độ dài chuỗi
    echo strlen($hoTen) . "<br>";

    //đếm số từ
    echo str_word_count($hoTen) . "<br>";

    //tìm kiếm ký tự trong chuỗi
    echo strpos($hoTen,"o") . "<br>";

    //thay thế ký tự trong chuỗi
    echo str_replace("Anh", "Đỗ", $hoTen) ."<br>";


    $soThuNhat =10;
    $soThuHai =5;
    //phép cộng
    echo $soThuNhat + $soThuHai . "<br>";
    //phép trừ
    echo $soThuNhat - $soThuHai . "<br>";
    //phép nhân
    echo $soThuNhat * $soThuHai . "<br>";
    //phép chia
    echo $soThuNhat / $soThuHai . "<br>";

    //toán tử gán # += -= *= /= %=
    $soThuNhat += $soThuHai ;
    echo $soThuNhat . "<br>";

    //toán tử so sánh: == ,!= , >,<,>=,<=,===
    echo $soThuNhat == $soThuHai . "<br>";

    //câu điều kiện
    $tong = $soThuNhat + $soThuHai ;
    if($tong<15){
        echo "Nhỏ hơn 15";
    }
    elseif("$tong==15"){
        echo"Tổng=15";
    }
    else{
       echo"Lớn hơn 15";
    }

    //switch case
    $color = "red";
    switch($color){
        case "red":
            echo "<br>";
            echo "IS RED";
        break;
        case "blue":
            echo "<br>";
            echo "IS BLUE";
        break;
        default:
        echo "<br>";
        echo "no color";
        break;
    }

    //for
    for($i = 0; $i<=100 ; $i++){
        echo $i . "<br>";
    }

    //mảng
    echo "<br>";
    $mang = ["Anh", "Nhat Anh", "Vu Anh"];
    //đếm phần tử
    echo count ($mang) . "<br>";
    echo $mang[1] ."<br>";
    
    $mang[] = "Quang Anh";
    print_r($mang);    

    #xóa
    echo "<br>";
    unset($mang[3]);
    print_r ($mang);




?>