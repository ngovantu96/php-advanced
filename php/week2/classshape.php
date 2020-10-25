<?php
// tạo lớp hình 
    class Shape{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function show(){
            return "đây là hình .hình {$this->name}";
        }
    }
    class Cricle extends Shape{
        public $radius;
        public function __construct($name,$radius){
            parent::__construct($name);
            $this->radius = $radius;
        }
        public function caculateArea(){
            return pow($this->radius,2)*pi();
        }
        public function caculatePerimeter(){
            return $this->radius*2*pi();
        }
    }
    class Rectangle extends Cricle{
        public $height;
        public $width;
        public function __construct($name,$height,$width){
            parent::__construct($name);
            $this->height = $height;
            $this->width = $width;
        }
        
 public function calculateArea(){
    return $this->height * $this->width;
}

public function calculatePerimeter(){
    return ($this->height + $this->width) * 2;
}
    }
    // tạo đối tượng và gọi phương thứ để xem kết quả;
    $cricle = new Cricle("hình tròn",5);
    echo $cricle->show()."<br>";
    echo "diện tích hình tròn".$cricle->caculateAreaCricle()."<br>";
    echo "chu vi hình tròn".$cricle->caculatePerimeter()."<br>";
    // tạo đối tượng hình vuống
    $rectange = new Rectange("hình chữ nhật",5,4);
    echo $rectange->show()."<br>";
    echo "diệc tích hcn : ".$rectange->caculatePerimeterRectange()."<br>";
    echo "chu vi hcn : ".$rectange->caculatePerimeterRectange()."<br>";
?>