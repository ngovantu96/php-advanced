
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $cookie_name = "user";
    $cookie_value ="Van Tu";
    setcookie($cookie_name,$cookie_value,time()+(86400*30));
?>
    <?php 
        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie named ".$cookie_name."is not set";
        }else{
            echo "cookie ".$cookie_name."is set";
            echo  "value ".$_COOKIE[$cookie_name];
        }
     ?>
</body>
</html>