<?php 
    class Cricle{
        public $radius;
        public $name;
        public function __construct($name,$radius){
            $this->name = $name;
            $this->radius = $radius;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function setRadius($radius){
            $this->name = $radius;
        }
    }

    interface Comparable{
        public function conpareTo($objOther);
    }

    class ComparableCircle extends Cricle implements Comparable {
        public function __construct($name,$radius){
            parent::__construct($name,$radius);
        } 
        public function compareTo($circleOther){
            $circleOtherRadius = $circleOther->getRadius();
            if($this->getRadius()>$circleOtherRadius){
                return 1;
            }else if($this->getRadius()<$circleOtherRadius){
                return -1;
            }else{
                return 0;
            }
        }
    }
    $cricleone = new ComparableCircle("circleone",8);
    $circletow = new ComparableCircle("hình trong 2",10);
    var_dump($circleOne->compareTo($circleTwo));
?>