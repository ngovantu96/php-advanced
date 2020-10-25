<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $filename = "data.json";
        $file = fopen($filename,"r");
        if(!$file){
            echo "xảy ra lỗi khi mở file";
            exit();
        }
        $filesize = filesize($filename);
        $filetext = fread($file,$filesize);
        fclose($file);
        echo ("kích thước của file là : $filesize byte");
        echo ("nội dung của file là : <br>");
        echo ("<pre> $filetext </pre>");
    ?>
</body>
</html>