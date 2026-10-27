var danhSachPhimm = [
    {
        id: 1,
        ten: "Gia Tộc R",
        thoiluong: 110,
        banner: "../anh/chuaxem.jpg",
        trailer: "https://www.youtube.com/embed/zgTWmKM7E5w"   
    },
    {
        id: 2,
        ten: "Bộ Tứ Báo Thủ",
        thoiluong: 120,
        banner: "../anh/chuaxem1.jpg",
        trailer: "https://www.youtube.com/embed/tPZCzRfSe4A"   
    },
    {
        id: 3,
        ten: "Zootopia",
        thoiluong: 108,
        banner: "../anh/chuaxem2.jpg",
        trailer: "https://www.youtube.com/embed/jWM0ct-OLsM"   
    },
    {
        id: 4,
        ten: "Thám Tử Lừng Danh Conan",
        thoiluong: 110,
        banner: "../anh/chuaxem3.jpg",
        trailer: "https://www.youtube.com/embed/53bmmVls3Fg"   
    },
    {
        id: 5,
        ten: "Doraemon",
        thoiluong: 95,
        banner: "../anh/chuaxem4.jpg",
        trailer: "https://www.youtube.com/embed/dvU9Mv1cfAw"   
    },

    {
        id: 6,
        ten: "Harry Potter và Hòn Đá Phù Thủy",
        thoiluong: 152,
        banner: "../anh/giaitri.jpg",
        trailer: "https://www.youtube.com/embed/VyHV0BRtdxo"  
    },
    {
        id: 7,
        ten: "Tử Chiến Trên Không",
        thoiluong: 115,
        banner: "../anh/giaitri1.jpg",
        trailer: "https://www.youtube.com/embed/Q-Zf8KhyS6E"   
    },
    {
        id: 8,
        ten: "Mai",
        thoiluong: 131,
        banner: "../anh/giaitri2.jpg",
        trailer: "https://www.youtube.com/embed/EX6clvId19s"   
    },
    {
        id: 9,
        ten: "Thỏ Ơi!!",
        thoiluong: 100,
        banner: "../anh/giaitri3.jpg",
        trailer: "https://www.youtube.com/embed/yhBpgqXwrt8"   
    },
    {
        id: 10,
        ten: "Bố Già",
        thoiluong: 128,
        banner: "../anh/giaitri4.jpg",
        trailer: "https://www.youtube.com/embed/jluSu8Rw6YE"   
    },

    {
        id: 11,
        ten: "Pokémon",
        thoiluong: 90,
        banner: "../anh/hoathing.jpg",
        trailer: "https://www.youtube.com/embed/1roy4o4tqQM"   
    },
    {
        id: 12,
        ten: "Tom and Jerry",
        thoiluong: 85,
        banner: "../anh/hoathinh1.jpg",
        trailer: "https://www.youtube.com/embed/kP9TfCWaQT4"   
    },
    {
        id: 13,
        ten: "Oggy and the Cockroaches",
        thoiluong: 80,
        banner: "../anh/hoathinh2.jpg",
        trailer: "https://www.youtube.com/embed/z26G1Jx77kY"   
    },
    {
        id: 14,
        ten: "Super Wings",
        thoiluong: 75,
        banner: "../anh/hoathinh3.jpg",
        trailer: "https://www.youtube.com/embed/tAWPRlif0p0"   
    },
    {
        id: 15,
        ten: "Frozen",
        thoiluong: 102,
        banner: "../anh/hoathinh4.jpg",
        trailer: "https://www.youtube.com/embed/TbQm5doF_Uc"   
    },

    {
        id: 16,
        ten: "Cartoon Network",
        thoiluong: 90,
        banner: "../anh/hai.jpg",
        trailer: "https://www.youtube.com/embed/dDNhtB7L8Lk"   
    },
    {
        id: 17,
        ten: "Người Đẹp và Quái Vật",
        thoiluong: 84,
        banner: "../anh/hai1.jpg",
        trailer: "https://www.youtube.com/embed/iurbZwxKFUE"   
    },
    {
        id: 18,
        ten: "Nàng Tiên Cá",
        thoiluong: 83,
        banner: "../anh/hai2.jpg",
        trailer: "https://www.youtube.com/embed/nPE0f-MB_bQ" 
    },
    {
        id: 19,
        ten: "Ben 10",
        thoiluong: 90,
        banner: "../anh/hai3.jpg",
        trailer: "https://www.youtube.com/embed/opR_2-IBw8E"  
    },
    {
        id: 20,
        ten: "Pokémon",
        thoiluong: 90,
        banner: "../anh/hai4.jpg",
        trailer: "https://www.youtube.com/embed/1roy4o4tqQM"  
    }
];
 var banner = document.getElementsByClassName("banner")[0];
var trailer = document.getElementsByClassName("banner")[1];
var iframeTrailer = trailer.getElementsByTagName("iframe")[0];

function xemTrailer() {
    banner.style.display = "none";
    trailer.style.display = "block";
}

function chonPhim(id) {
    for (var i=0;i<danhSachPhimm.length;i++){
        if (danhSachPhimm[i].id == id) {
            iframeTrailer.src = danhSachPhimm[i].trailer;
            xemTrailer();
            break;
        }
    }
}


var danhSachPoster = document.getElementsByClassName("phim-poster");

for (var i=0;i<danhSachPoster.length;i++) {
    danhSachPoster[i].onclick = function () {
        for (var j=0;j<danhSachPhimm.length;j++) {
            if(danhSachPhimm[j].banner == this.getAttribute("src")) {
                chonPhim(danhSachPhimm[j].id);
                break;
            }
        }
    };
}