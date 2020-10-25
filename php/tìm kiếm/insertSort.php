<?php 

    function insertsort(array $number){
        for($i= 0; $i < count($number);$i++){
            $val = $number[$i];
            $j = $i-1;
            while($j>=0  && $number[$j] >  $val){
                $number[$j+1] = $number[$j];
                $j--;
            }
            $number[$j+1] = $val;
        }
        return $number;
    }
    $numbers =array(5,1,60,40,60,99,40,45,2,6,7);
    echo "<pre>";
    print_r(insertsort($numbers));
    echo implode(" ",$numbers);
?>
