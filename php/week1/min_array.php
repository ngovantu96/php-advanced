<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $arr = array(1,20,3,5,7,9,100);
   print_r($arr);
   ?>
    <p>số lượng trong mảng là</p><?php echo count($arr)?>
    <p>giá trị lớn nhât tong mảng là</p><?php echo max($arr)?>
    <p>giá trị nhỏ nhât tong mảng là</p><?php echo min($arr)?>

    <p>sắp xếp tăng dần</p><?php sort($arr) ; print_r($arr); ?>
    <p>sắp xếp giảm dần</p><?php  rsort($arr) ;print_r($arr)?>

    <p>sắp xếp mảng tăng dần theo giá trị</p><?php  asort($arr); print_r($arr)?>
    <p>sắp xếp mảng tăng dần theo khóa</p><?php  ksort($arr); print_r($arr)?>

    <p>sắp xếp mảng giảm dần theo giá trị</p><?php  arsort($arr); print_r($arr)?>
    <p>sắp xếp mảng giảm dần theo khóa</p><?php  krsort($arr); print_r($arr)?>
  <?php foreach($arr as $x => $x_value){
      echo "key = ".$x."value =".$x_value;
      echo "<br>";
  } ?>  



    
    
</body>
</html>