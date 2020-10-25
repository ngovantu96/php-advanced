<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập kích thước của mảng: <input type="text" name="size">
        Nhập : <input type="text" name="number">
        <input type="submit" value="Result">
    </form>
    <?php  
            if(isset($size)=="" && isset($number)==""){
                echo "vui lòng nhập giá trị vào";
            }
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $size = $_POST["size"];
                $number = $_POST["number"];
                $array = creatArray($size);
                echo "<br>".findValueNumber($array,$number);
            }
           
        function creatArray($size){
            $arr= array();
            for($i=0;$i<$size;$i++){
                $arr[$i] = rand(1,100);
                echo $arr[$i]."-";
            }
            return $arr;
        }
       function findValueNumber($arr,$number){
           if($number <0 || $number >100){
               echo "số bạn nhập không hợp lệ";
           }
            for($i=0;$i<count($arr);$i++){
                if($number == $i){
                    return $arr[$i];
                }
            }
       }
      
  
        
    ?>
</body>
</html>