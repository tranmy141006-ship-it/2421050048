CREATE TABLE netflix;
-- phim
-- the_loai
-- quoc_gia
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung


-- if not EXISTS(chạy nhiều lần k lỗi)
--Table Người dùng
CREATE TABLE  nguoi_dung (
int id AUTO_INCREMENT PRIMARY KEY,
ten_dang_nhap varchar(30) NOT NULL,
mat_khau varchar(30) NOT NULL,
email varchar(30) NOT NULL,
ho_va_ten varchar(50) NOT NULL,
ngay_sinh date NOT NULL,
so_dien_thoai varchar(10) NOT NULL,
gioi_tinh boolean  NOT NULL--true:nam/false:nữ
);


-- the_loai
CREATE TABLE IF NOT EXISTS the_loai (
id int AUTO_INCREMENT PRIMARY KEY ,
ten_the_loai varchar(255) NOT NULL
);



-- dien_vien
CREATE TABLE IF NOT EXISTS dien_vien (
id int AUTO_INCREMENT PRIMARY KEY ,
ho_ten varchar(1000) NOT NULL,
ngay_sinh date NOT NULL
);



-- phim
CREATE TABLE IF NOT EXISTS phim (
id int AUTO_INCREMENT PRIMARY KEY ,
ten_phim varchar(225) NOT NULL,
quoc_gia varchar(100) NOT NULL,
dao_dien_id int,
nam datetime NOT NULL,
do_tuoi int NOT NULL,
mo_ta varchar(255) NOT NULL
);



-- phim_the_loai
CREATE TABLE IF NOT EXISTS phim_the_loai (
id int AUTO_INCREMENT PRIMARY KEY ,
phim_id int NOT NULL,
the_loai_in int NOT NULL
);


-- phim-dien-vien
CREATE TABLE IF NOT EXISTS phim_dien_vien (
id int AUTO_INCREMENT PRIMARY KEY ,
phim_id int NOT NULL,
dien_vien_id int NOT NULL
);


--dao-dien
CREATE TABLE IF NOT EXISTS dao_dien (
id int AUTO_INCREMENT PRIMARY KEY ,
ho_ten varchar(1000) NOT NULL,
ngay_sinh date NOT NULL
)




INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Mai','Việt Nam','1','2023-1-1',16,'Phim tâm lý tình cảm');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Mưa đỏ','Việt Nam','2','2025-1-1',13,'Chiến tranh lịch sử');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Tử chiến trên không','Việt Nam','3','2025-1-1',16,'Phim hành động');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Bộ tứ báo thủ','Việt Nam','4','2025-1-1',16,'Hài');
INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Thỏ ơi','Việt Nam','5','2025-1-1',16,'Tâm lý');



