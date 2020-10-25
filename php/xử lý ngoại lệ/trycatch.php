<?php 
    class DivideByzeroException extends Exception {
        public function __toString(){
            return "cant' divide by zero";
        }
        
    }
    function divide($numberrator, $denominator){
        if($denominator === 0){
            throw new DivideByZeroException();
        }
        return $numberrator/$denominator;
    }
    try{
    $result = divide(100,5);
    echo $result."<br>";
    $result = divide(100,0);
    echo $result;
    }catch(DivideByZeroException $e){
        echo "có lỗi xày ra".$e;
    }