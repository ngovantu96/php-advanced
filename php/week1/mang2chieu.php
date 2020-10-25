<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        // $arr = array(
        //     array(1,2,3),
        //     array(2,6,8),
        //     array(4,7,5),
        //     array(3,9,1)
        // );
        // $sum=0;
        // foreach($arr as $value){
        //     $sum = $sum+$value;
        //     echo $sum;
        // }
        
    //     print_r(min($arr));
    //     print_r(max($arr));
    //     for($row = 0; $row<4;$row++){
    //         echo "<p><b> Row number $row </b></p>";
    //         for($col = 0; $col<3;$col++){
    //             echo "<li>".$arr[$row][$col]."</li>";
    //         }
    //     }

    

      
           
           
            function tong(){
                $numbers = array(4, 6, 2, 22, 11);
                $sum =0;
                for($i=0;$i<count($numbers);$i++){
                $sum = $sum+$i;
            }
            return $sum;

        }
        echo tong();
    //         sort($numbers);

    //         $arrlength = count($numbers);
    //         for($x = 0; $x < $arrlength; $x++) {
    //         echo $numbers[$x];
    //         echo "<br>";
           
    //         }
    //         echo "số lớn nhất : ". max($numbers);
?>

</body>
</html>