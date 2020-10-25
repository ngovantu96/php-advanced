<!-- sắp xếp tăng dần theo chữ cái -->
<?php
 $cars1 = ["Volvo", "BMW", "Toyota"];
 echo "<br".sort($cars1);
?>
<!-- sắp xếp giảm dần théo chữ cái -->
<?php
 $cars2 = ["Volvo", "BMW", "Toyota"];
 echo "<br".rsort($cars2);
?>
<!-- sắp xếp tắng dần théo giá trị -->
<?php
 $age3 = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
 echo "<br".asort($age3);
?>
<!-- sắp xếp tăng dần théo khóa -->
<?php
 $age1 = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
 echo "<br".ksort($age1);
?>
<!-- sắp xếp giảm dần theo giá trị -->
<?php
 $age2 = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
 echo "<br".arsort($age2);
?>
<!-- sắp xếp gian dần theo khóa -->
<?php
 $age4 = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
 var_dump("<br sắp xếp".krsort($age4));
?>