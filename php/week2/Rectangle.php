<?php 
    class Rectangle{
        public $width;
        public $height;
        function __construct($width,$height)
        {
            $this->width = $width;
            $this->height = $height;
        }
       public function get_area(){
           return $this->width*$this->height;
        }
        public function get_perimeter(){
            return ($this->width+$this->height)*2;
        }
    }
    $rectangle = new Rectangle(5,4);
    echo "chiều dài hcn là : ".$rectangle->width."<br>";
    echo "chiều rộng hcn là : ".$rectangle->height."<br>";
    echo $rectangle->get_area()."<br>";
    echo $rectangle->get_perimeter();
?>