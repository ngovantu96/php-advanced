<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
        session_start();
        if($_SESSION['flagPermission'] == true){
            echo "đang nhập thành công".$_SESSION['fullname'];
            
        }else{
    ?>
    <div id="form">
        <form action="process.php" method="post">
            <div class="input">
            <p>User Name</p>
            <input type="text" name="username" >
            </div>
            <div class="input">
            <p>Password</p>
             <input type="password" name="password">
            </div>
            <div class="input">
                <input type="submit" value="đăng nhập">
            </div>
        </form>
        <?php }?>
    </div>
</body>
</html>