<?php  
    class  Books {
        var $price;
        var $title;
        // các hàm thành viên
        function setPrice($par){
            $this ->price = $par;
        }
        function getPrice(){
            echo $this->price."<br>";
        }
        function setTitle($par){
            $this->title = $par;
        }
        function getTitle(){
            echo $this->title."<br/>";
        }

    }
    //tạo đối tượng
    $tienganh = new Books;
    $toan = new Books;
    $lichsu = new Books;
    //thiêt lập và gọi hàm thành viên
    $tienganh->setTitle("English Grammar");
    $toan->setTitle("toán lớp 6");
    $lichsu->setTitle("lịch sử lớp 6");

    $tienganh->setPrice(10);
    $toan->setPrice(8);
    $lichsu->setPrice(15);

   // gọi hàm thành viên để lấy giá trị
    $tienganh->getTitle();
    $toan ->getTitle();
    $lichsu->getTitle();
    $tienganh->getPrice();
    $toan->getPrice();
    $lichsu->getPrice();


?> 