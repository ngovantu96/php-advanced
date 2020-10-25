<?php 
    function binarySearch(array $numbers, int $needle) : bool{
        $low = 0;
        $high = count($numbers)-1;
        while($low <= $high){
            $mid = (int)(($low + $high)/2);
            if($numbers[$mid] > $needle){
                $high = $mid - 1;
            }else  if($numbers[$mid] < $needle){
                $low = $mid +1;
            }else{
                return true;
            }
        }
        return false;
    }
?>
<!-- đệ quy nè -->
<?php
//     function binarySearch(array $numbers, int $needle, int $low ,int $high) : bool{
//         if($high >= $low){
//             $mid = (int)($low + ($low - $high) / 2); 
//             if($numbers[$mid] == $needle)
//             return $mid;
//         if($numbers[$mid] > $needle)
//             return binarySearch($numbers,$needle,$mid-1,$low);
        
//         if($numbers[$mid] < $needle)
//             return binarySearch($numbers,$needle,$mid+1,$high);
        
//         return -1;
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> 
        <form action="#" method="post">
            <input type="text" name="numbers">
            <input type="submit" value="result">
        </form>
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $number = $_POST["numbers"];
                $numbers = array(20,14,17,20,25,30,59,50,33,42);
                if(binarySearch($numbers,$number)== true){
                    echo "$number. nằm trong mảng";
                }else{
                    echo "$number.k nằm trong mảng";
                }
            }
        ?>
    </div>
    
</body>
</html>