<?php 
    class CustomException extends Exception{
        public function errorMessage(){

            $errorMsg = "Error on line".$this->getline()."in".$this->getFile()." : <br> ".$this->getMessage()."<br> is not a valid Email addres";
            return $errorMsg;
        }
    }$email = "abc@gmail...com";
    try{
        if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
            throw new CustomException($email);
        }
    }catch(CustomException $e){
        echo $e->errorMessage(); 
    }
?>