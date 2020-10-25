<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $to = "xyz@somedomain.com";
        $subject = "đây là subject";
        $message = "<b> đây là hTML </b>";
        $message .= "<h1>đây là headline</h1>";
        $header = "from : abc@somdomain.com \r\n";
        $header = "Cc : adjf@somedomain.com\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";  
        $retval = mail($to,$subject,$mesage,$header);
        if($reval ==true){
            echo "gửi email thành công";
        }else{
            echo "không thể gửi email";
        }
    ?>
</body>
</html>