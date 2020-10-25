<?php
    $date = getdate();
    echo "<pre>";
    print_r($date);
    echo "</pre>";
    echo $hour = $time['hours'];
?>
<!-- thiết lập lại múi giờ -->
<?php 
    date_default_timezone_set('Asia/Ho Chi Minh');
    $time = getdate();
    echo "<pre>";
    print_r($date);
    echo "</pre>";

?>
<!-- định dnag cách hiển thị thời gian với date -->
<?php 
    $time = time();
    echo date("d/m/Y");
    echo "<br>";
?>
<?php 
    $time = time();
    echo date("d/m/Y/h/i/s");
?>