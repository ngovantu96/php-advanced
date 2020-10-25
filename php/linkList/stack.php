<?php 
    class ReadingList{
        protected $stack;
        protected $limit;
        
        public function __construct($limit = 10)
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
        public function top(){
            return current($this->stack);
        }
        public function isEmpty(){
            return empty($this->stack);
        }
    }
$myBooks = new ReadingList();

$myBooks->push('A Dream of Spring')."<br>";
$myBooks->push('The Winds of Winter')."<br>";
$myBooks->push('A Dance with Dragons')."<br>";
$myBooks->push('A Feast for Crows')."<br>";
$myBooks->push('A Storm of Swords')."<br>"; 
$myBooks->push('A Clash of Kings')."<br>";
$myBooks->push('A Game of Thrones')."<br>";
echo "<pre>";
print_r($myBooks);

$myBooks->pop()."<br>"; // outputs 'A Game of Thrones'
$myBooks->pop()."<br>"; // outputs 'A Clash of Kings'
$myBooks->pop()."<br>";
$myBooks->top()."<br>"; // outputs 'A Feast for Crows'
echo "<pre>";
print_r($myBooks);
?>