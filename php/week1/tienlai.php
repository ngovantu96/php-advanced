<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            width: 300px;
            font-size: 16px;
            padding: 10px 12px 10px 12px;
            border: 3px solid #cccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="tiengoc" placeholder="lượng tiền ban đầu">
        <input type="text" name="laisuat" placeholder="lãi suất đầu tư">
        <input type="text" name="date" placeholder="số năm đầu tư">
       <input type="submit" name="submit" value="Calculate">
       
    </form>
</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $tiengoc = $_POST["tiengoc"];
        $laisuat = $_POST["laisuat"];
        $thoigian = $_POST["date"];
        $Calculate = $tiengoc+($tiengoc*$laisuat/100)*$thoigian;
    }
   
    echo $Calculate;
?>