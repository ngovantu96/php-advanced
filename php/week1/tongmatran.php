<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a=[[1,2,3],[1,2,2],[3,2,1]];
        //$b = [[3,2,4],[9,4,5],[6,2,8]];
        $sum=0;
        for($i=0;$i<3;$i++){
            for($j=0;$j<3;$j++){
                if($j==$i){
                    $sum = $sum+$a[$i][$j];
                }
            }
        }
        echo $sum;
    
    ?>
</body>
</html>