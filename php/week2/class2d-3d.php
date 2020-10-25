<?php 
    class Point2D{
        public float $x;
        public float $y;
        public function __construct(float $x,float $y){
            $this->x = $x;
            $this->y = $y;
           
        }
        public function set_X(float $x){
            $this->x =$x;
        }
        public function set_Y(float $y){
            $this->y =$y;
        }
        public function set_XY(float $x,float $y){
            $this->x;
            $this->y;
        }
        public function get_X(){
            return $this->x;
        }
        public function get_Y(){
            return $this->y;
        }
        public function get_XY(){
            $array =[];
            array_push($array,$this->x);
            array_push($array,$this->y);
            return $array;
        }
        public function __toString()
        {
            return "x, y là tọa độ";
        }
    }

    class Point3D extends Point2D{
        public float $z;
        public $array = array();
        public function __construct(float $x, float $y, float $z){
            parent::__construct($x,$y);
            $this->z= $z;
        }
        public function set_Z(float $z){
            $this->z = $z;
        }
        public function get_Z(){
            return $this->z;
        }
        public function set_XYZ(float $x, float $y, float $z){
           $this->array = [ parent::set_x($x),
           parent::set_Y($y),
           $this->z = $z];
        }
        public function get_XYZ(){
            $array =[];
            array_push($array,parent::get_X(),parent::get_Y(),$this->z);
            return $array;
        }
        public function __toString()
        {
            return "đây la tọa độ x, y, z {$this->x},{$this->y}, {$this->z}";
            
        }
    }
    $point2d = new Point2D(2,4);
    echo $point2d->get_X()."<br>";
    echo $point2d->get_Y()."<br>";
    // $point2d->set_XY(2,4);
    print_r($point2d->get_XY())."<br>";
    $point3d = new Point3D(2,4,5);
    echo $point3d->get_X()."<br>";
    echo $point3d->get_Y()."<br>";
    echo $point3d->get_Z()."<br>";
    $point3d->set_XYZ(2,4,5)."<br>";
    print_r($point3d->get_XYZ());
?>