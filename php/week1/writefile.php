<?php 
    $filename = "tmp.txt";
    $file = fopen($filename,"w");
    if(!$file){
        echo "xảy ra lỗi khi mở file";
        exit();
    }
    fwrite($file,"ví dụ ghi file trong php.\n");
    fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $filename = "tmp.txt";
        $file = fopen($filename,"r");
        if(!$file){
            echo "xảy ra lỗi khi mở file";
            exit();
        }
        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);
        fclose($file);
        echo "kích thowsc của file là : $filesize";
        echo "ten của file là : $filename";
        echo "dưới đây là nội dung của file <br>";
        echo "($filetext)";
    ?>
</body>
</html>