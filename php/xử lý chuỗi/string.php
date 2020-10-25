<?php 
    $str = 'freetuts.net is a website free for you';
    echo "<pre>";
    var_dump(explode(" ",$str));
    // hàm explode là để tách chuỗi đưa veef1 mảng;
    echo "<pre>";
    echo implode(" ",array('hello', 'các','bạn'));
    // hàm ord là trả về kết quả của bảng mã ASCII
    echo ord('Aa')."<br>";

    // hàm str_replace() là tìm kiếm và thay thế chuỗi;
    $Str = " xin chào     \n  cả nhà"."<br>";
    
    $s =  str_replace('xin','Xin',$Str);
    echo $s;
    echo "<br>";
    // chuyển chữu thường sang chữ hoa
    
    echo strtoupper($Str);
    echo "<br>";
    // chuển chữ cãi đầu tiên thành chữ hoa
    echo ucfirst($Str);
    echo "<br>";
    echo ucwords($Str);
    // dùng trim để loại bỏ kí tự trắng
    echo trim($Str, " ");
    // dùng trim để loại bỏ kí tự trắng bên trai
    echo ltrim($Str, " ");

    // chuyển đổi kí tự xuoossng dạng "\n" thành thẻ
    echo nl2br("xin chào  \n cahsc bạn");