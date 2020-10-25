<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Singple Calculate</h1>
    <p>calculate</p><br>
    <form action="" method="post">
    <label for="">Fisrt Operand</label>
    <input type="text" name="fisrt"><br><br>
    <label for="">Operand</label>
     <select name="opera" id="">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="multip">*</option>
        <option value="divi">/</option>
     </select><br><br>
     <label for="">Second Operand</label>
    <input type="text" name="second">
    <input type="submit" name="submit" value="calculate">
    </form>
</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $opera = $_POST["opera"];
        $number1 = $_POST["fisrt"];
        $number2 = $_POST["second"];
    }
    // công
    if($opera =="add"){
        $calculate = $number1 + $number2;
        echo $calculate;
    }
    // trừ
   
    if($opera =="sub"){
        $calculate = $number1 - $number2;
        echo $calculate;
    }
//    nhân
    if($opera =="multip"){
        $calculate = $number1*$number2;
        echo $calculate;
    }
    // chia
     
    if($opera =="divi"){
        $calculate = $number1/$number2;
        echo $calculate;
    }

?>