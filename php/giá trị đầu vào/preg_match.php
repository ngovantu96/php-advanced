<?php 
    $subject = 'php /php/ is language';
    $patten = '#/php/#';//dùng dấu thăng để tìm kí tự đặc biệt
    
    if(preg_match($patten,$subject,$match)==true){
        echo 'tìm thấy';
    }else{
        echo 'không tìm thấy';
    }
    echo "<pre>";
    print_r($match);
    echo "<pre>";
// sự khác biệt là pre_match all là lấy hết giá trị tìm thấy.còn bên kia lấy được 1 giá trị thôi
    if(preg_match_all($patten,$subject,$match)==true){
        echo 'tìm thấy';
    }else{
        echo 'không tìm thấy';
    }
    echo "<pre>";
    print_r($match[0]);
    echo "<pre>";
?>