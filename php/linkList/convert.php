<?php 
    class ReadingList{
        protected $stack;
        protected $limit;
        
        public function __construct($limit=100)
        {
            $this->stack = array();
            $this->limit = $limit;
        }
        public function push($item){
            if(count($this->stack)<$this->limit){
                array_unshift($this->stack,$item);
            }else{
                throw new RuntimeException("stack is full");
            }
        }
        public function pop(){
            if($this->isEmpty()){
                throw new RuntimeException("stack is empty");
            }else{
                return array_shift($this->stack);
            }
        }
        public function convert($number){
            $arr = array();
           while($number>0){
               $digit = $number%2;
                $this->push = array_push($arr,$digit);
           }
           return $arr;
        }
    }
    $number = new ReadingList();
    $number->convert(111);
    
?>
 