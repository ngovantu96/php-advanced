
<?php 
    function SNT(){
        
        for($number =1;$number<=100;$number++){
            $count=0;

            for($i=2;$i<=sqrt($number);$i++){
                if($number%$i==0){
                    $count++;
                }
            }
            if($count==0 && $number >1){
                // echo $number."&nbsp";
                 echo $number;
               
            }
            
        }
       

    }
     SNT();
    
?>