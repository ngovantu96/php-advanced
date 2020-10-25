<?php 
    $subject = 'php is eassy';
    $pattern = "/php/";
    if(preg_match($pattern,$subject, $match)==true){
        echo 'tìm thấy';
    }else{
        echo 'không tìm thấy';
    }
?>