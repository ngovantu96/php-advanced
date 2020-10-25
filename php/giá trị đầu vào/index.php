<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            width: 500px;
            height: 400px;
            margin: auto;
            padding-top: 100px;
            border: 1px solid red;
        }
        form{
            margin-left: 10px;
        }
        input{
            padding-top: 5px;
            margin: auto;
            text-align: center;
              
        }
    </style>
</head>
<body>
    <?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

    include_once 'xulyform.php';
        if(!empty($_POST)){
            $error = array();
            $email = $_POST['email'];
            if(checkInput($email,'email')==false){
                $error['email'] = 'giá trị này không hợp lệ';
                $email ="";
            }
        }
    ?>
    <div class="form" >
        <form action="#" method="post">
            Email : <input type="text" name="email" value="<?php echo $email;?>" >
            <p><?php echo $error['email'];?></p>
            <br><br>
            User Name : <input type="text" name="user" value=""><br><br>
            Pass Word : <input type="password" name="pass" value=""><br><br>
            <input type="submit" name="Login">
        </form>
    </div>
</body>
</html>