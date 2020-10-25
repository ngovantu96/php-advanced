<?php  
    class  Books {
        public $price;
        public $title;
        function __construct($title,$price){
            $this->title = $title;
            $this->price = $price;  
        }
        function getPrice(){
            echo $this->title."<br>";
        }
        function getTitle(){
            echo $this->price."<br>";
        }
    }

    $tienganh = new Books("English Grammar",10);
    $toan = new Books("toán lớp 6",8);
    $lichsu = new Books("lịch sử lớp 6",15);

    // lấy giá trị thiết lập
    $tienganh->getTitle();
    $toan ->getTitle();
    $lichsu->getTitle();

    $tienganh ->getprice();
    $toan ->getPrice();
    $lichsu->getPrice();
?>
