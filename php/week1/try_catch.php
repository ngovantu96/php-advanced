 <?php 
    try{
        $a=100;
        
        if($a<0 || $a>100){
             throw new Exception("số nhập vào không hợp lệ");
        }
        echo $a;
       
    }catch(Exception $ex){
        echo $ex->getMessage();
    }
 ?>