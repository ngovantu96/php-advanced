<?php 
// đổi chỗ trực tiếp
    function interchangeSort(array $number){
        for($i= 0; $i < count($number)-1;$i++){
          for($j=$i+1; $j<count($number); $j++){
              if($number[$j]< $number[$i]){
                  $temp = $number[$j];
                  $number[$j] = $number[$i];
                  $number[$i] = $temp;
              }
          }
        }
        return $number;
    }
    $numbers =array(5,1,60,40,60,99,40,45,2,6,7);
    echo "<pre>";
    print_r(interchangeSort($numbers));
    echo implode(" ",$numbers);
?>
