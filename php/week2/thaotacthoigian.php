<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content{
            margin: 20px;
            width: 600px;
            border: 2px solid #2baf4d;
            padding: 10px;
        }
        .content.h1{
            text-align: center;
            margin-bottom: 10px;
            color: red;
        }
        .content div.row{
            margin-bottom: 10px;
        }
        .content div.row span{
            display: inline-block;
            width: 100px;
        }
        .content div.row select{
            width: 100px;
        }
        .content div.row input[type=submit]{
            padding: 2px 20px;
        }
    </style>
</head>
<body>
   
    <?php 
        $result = date("h:i:A D, d/m/y",time());
        echo $result;
    ?>
    
    
</body>
</html>