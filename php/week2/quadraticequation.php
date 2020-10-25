<?php 
    class QuadraticEquation{
        private  $a;
        private $b;
        private $c;
        public function __construct($a,$b,$c){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        public function get_A(){
            return $this->a;
        }
        public function get_B(){
            return $this->b;
        }
        public function get_C(){
            return $this->c;
        }
        public function getDiscriminant(){
            return pow($this->b, 2) - 4 * $this->a * $this->c;
        }
        public function result(){
            if($this->getDiscriminant()>0){
               echo "nghiệm 1 :".(-$this->b-sqrt($this->getDiscriminant())/(2*$this->a))."<br>";
            echo "nghiệm 2 :" .(-$this->b+sqrt($this->getDiscriminant())/(2*$this->a));
            }else{
            if($this->getDiscriminant()==0){
               echo "phương trình có nghiệm kép x1 =x2 = ".(-$this->b/(2*$this->a));
            }else{
            if($this->getDiscriminant()<0){
                echo "pt vô ngiệm";
            }
        }
    }
        }
       

    }
    $quadraticequation = new QuadraticEquation(2,4,2);
    echo $quadraticequation->getDiscriminant();
    $quadraticequation->getDiscriminant();
    echo"<br>";
    $quadraticequation->result();
?>