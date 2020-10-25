<?php 
    class Fan{
        const SLOW =1;
        const MEDIUM =2;
        const FAST = 3;
        private $speed;
        private $on;
        private $radius;
        private $color;
        public function __connstruct(){
            $this->speed = self::SLOW;
            $this->on = false;
            $this->radius = 5;
            $this->color = "blue";
        }
        public function setSpeed($speed){
            $this->speed = $speed;
        }
        public function setOn(){
            $this->on = false;
        }
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function setcolor($color){
            $this->color = $color;
        }
        // get 
        public function getSpeed(){
            return $this->speed;
        }
        public function getOn(){
            return $this->on;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function getcolor(){
            return $this->color;
        }
        public function toString(){
            if($this->getOn()==true){
                return $this->getSpeed()."-".$this->getcolor()."-".$this->getRadius()."fan is on";
            }else{
                return $this->getColor()."-".$this->getColor()."-".$this->getRadius()."fan is off";
            }

        }
        
    }
    $fan1 = new Fan();
    $fan1->setSpeed(5);
    $fan1->setOn(false);
    $fan1->setRadius(10);
    $fan1->setColor("yellow");
    echo $fan1->toString();

?>