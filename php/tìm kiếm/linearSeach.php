<?php 

    function search(array $numbers, int $needle ) : bool {
        $totalItems = count($numbers);
        for($i = 0;$i< $totalItems;$i++){
            if($numbers[$i] === $needle){
                return true;
            }
        }
        return false;
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 400px;
            height: 300px;
            border: 1px solid black;
        }
        input{
            width: 150px;
            text-align: center;
            margin-top: 50px;
        
        }
    </style>
</head>
<body>
    
    <form action="#" method="post">
            <input type="text" name="numbers" value="">
            <input type="submit" value="result">
    </form>
    <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numbers = $_POST["numbers"];
                $numbers = range(1,200,5);
                if(search($numbers,$_POST["numbers"])){
                    echo "tìm thấy";
                }else{
                    echo "not found";
                }
            }
    ?>
</body>
</html>