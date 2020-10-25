<!-- lọc tìm kiếm thoe tên-->
<?php 
   
   $ben = array_filter($mang, function($tenbien){
        return strpos($tenbien->name,'a');
   });
   print_r($ben); 
    ?>

    <!-- dùng header()  để chuyển hướng dang trang khác dùng phương thứ post -->
    <!-- đỏi dường dân url là dùng get -->