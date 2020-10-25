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
               
        ?>
    </div>
    <?php
        $numbers = range(1,100,1);
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
        if(binarySearch($numbers, $needle)){

        }
    ?>
</body>
</html>