
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text]{
            width: 300px;
            font-size: 16px;
            border: 1px solid #cccc;
            border-radius: 4px;
            padding: 12px 10px 10px 12px;
        }
        #submit{
            border-radius: 2px;
            padding: 10px 30px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Từ điển Việt Nam</h2>
    <form action="" method="post">
    <input type="text" name="search" placeholder="nhập từ cần tìm">
    <input type="submit" id="submit" value="tìm">
    </form>
</body>
</html>
<?php
$dictionary = array(
    "hello"=>"xin chào", 
    "how"=>"thế nào", 
    "book"=>"quyển vở", 
    "computer"=>"máy tính");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $searchword = $_POST["search"]; 
  $flag = 0;
  foreach($dictionary as $word => $description) {
     if($word == $searchword){
        echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
        echo "<br/>";
        $flag = 1;
     }
  } 

  if($flag == 0){
     echo "Không tìm thấy từ cần tra.";
  }
}
?>