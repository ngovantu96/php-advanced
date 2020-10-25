<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập vào một chuỗi : <input type="text" name="str" id=""><br><br>
        Nhập vào một chuỗi : <input type="text" name="kitu" id=""><br><br>
        <input type="submit" value="result">
    </form>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $str = $_POST["str"];
            $kitu =$_POST["kitu"];

        }
        function dem($str,$kitu){
            $count=0;
         for($i=0;$i<strlen($str);$i++){
             if($str[$i]==$kitu ){
             $count++;
             }
         }
          
        return $count;
        }
        if(isset($_POST["str"]) && isset($_POST["kitu"])){
            echo dem($str,$kitu);
        }
        
    ?>
</body>
</html>