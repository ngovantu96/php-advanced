<?php
  $pattern = "/ca[kf]e/";
  $text = "He was eating cake in the cafe.";
  $matches = preg_match_all($pattern, $text, $array);
  echo $matches . " mẫu được tìm thấy.";
?>
<?php
$pattern = "/cafe/";
$text = "He was eating cake in the cafe.";
if(preg_match($pattern, $text)){
    echo "Trùng khớp!";
} else{
    echo "Không tìm thấy.";
}
?>
<?php
  $pattern = "/[\s,]+/";
  $text = "My favourite colors are red, green and blue";
  $parts = preg_split($pattern, $text);
 
  // Loop through parts array and display substrings
  foreach($parts as $part){
    echo $part . "<br>";
  }
?>
<!-- timg kiếm theo chữ cái đầu tiên-->
<?php
  $pattern = "/^J/";
  $names = array("Jhon Carter", "Clark Kent", "John Rambo");
  $matches = preg_grep($pattern, $names);
 
  // lặp qua các matches và hiển thị chúng
  foreach($matches as $match){
    echo $match . "<br>";
  }
?>