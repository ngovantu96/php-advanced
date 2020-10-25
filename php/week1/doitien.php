<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="usd">
        <input type="submit" name="submit" value="rate">
    </form>
</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usd = $_POST["usd"];
        $rate = $usd*23000;
        echo "tiền việt của bạn là ".$rate;
    }
    
?>