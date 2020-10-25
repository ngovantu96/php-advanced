<?php
function swap($number,$a,$b){
    $temp = $number[$a];
    $number[$a] = $number[$b];
    $number[$b] = $temp;
    return $number;
}
    function selectionSort($number){
        for($i = 0;$i <count($number)-1;$i++){
            $min = $i;
            for($j = $i+1;$j<count($number);$j++){
                if($number[$j] < $number[$min]){
                $min = $j;
                }
            }
            $number = swap($number,$min, $i);
        }
        return $number;
    }
    $numbers = [5,1,60,40,60,99,40,45,2,6,7];
    echo "<pre>";
    print_r(selectionSort($numbers));
?>