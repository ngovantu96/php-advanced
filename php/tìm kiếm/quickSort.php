<?php 
            // tìm keiems nhanh
            // chọn phần tử cầm canh
                function swap($a,$b){
                    $tamp = $a;
                    $a = $b ;
                    $b = $tamp;
                }

                function partition(array $numbers , $low , $high){
                    $pivot = $numbers[$high];
                    $left = $low;
                    $right = $high -1;
                    $high = ($left + $right)/2;
                    while($left <= $right){
                        while($left <= $right && $numbers[$left] < $pivot) $left++;
                        while($right >= $left && $numbers[$right] > $pivot) $right--;
                        if($left <= $right) {
                        swap($numbers[$left], $numbers[$right]);
                        $left++;
                        $right--;
                        }
                    }
                    swap($numbers[$left], $numbers[$high]);                       
                    return $left;
                }

                function quickSort(array &$numbers ,$low, $high){
                    if($low < $high){
                        $pi = partition($numbers,$low,$high);
                        quickSort($numbers,$low, $pi-1);
                        quickSort($numbers,$pi+1,$high);
                    }
                }
                $number = array(5,1,60,40,60,99,40,45,2,6,7);
                echo "<pre>";
                var_dump(quickSort($number,0 ,count($number)-1));
                echo implode(" ",$numbers);

// function partition(&$arr,$leftIndex,$rightIndex)
// {
//     $pivot = $arr[($leftIndex+$rightIndex)/2];
    
//     while ($leftIndex <= $rightIndex)
//     {       
//         while ($arr[$leftIndex] < $pivot)            
//                 $leftIndex++;
//         while ($arr[$rightIndex] > $pivot)
//                 $rightIndex--;
//         if ($leftIndex <= $rightIndex) { 
//                 $tmp = $arr[$leftIndex];
//                 $arr[$leftIndex] = $arr[$rightIndex];
//                 $arr[$rightIndex] = $tmp;
//                 $leftIndex++;
//                 $rightIndex--;
//         }
//     }
//     echo implode(",",$arr)." @pivot $pivot<br>";
//     return $leftIndex;
// }
 
// function quickSort(&$arr, $leftIndex, $rightIndex)
// {
//     $index = partition($arr,$leftIndex,$rightIndex);
//     if ($leftIndex < $index - 1)
//         quickSort($arr, $leftIndex, $index - 1);
//     if ($index < $rightIndex)
//         quickSort($arr, $index, $rightIndex);
// }
// $nums = array(5,3,8,6,2,7);
// echo implode(",",$nums)." @unsorted<br>";
// quickSort($nums,0,count($nums)-1);
// echo implode(",",$nums)." @sorted<br>";
?>
