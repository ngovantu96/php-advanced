<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uploadfile.php" method="post" enctype="multipart/form-data">
        selec image to upload <br>
        <input type="file" name="file" id="file">
        <input type="submit" value="upLoad" name="submit">
    </form>
    <?php 
        $target_dir = "uploads/";
        $target_file = $target_dir.basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // kiểm tra xem file ảnh là 1 gì đó<div class="">if(</div>
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if($check !== false){
                echo "file là 1 ảnh -".$check["mime"].".";
                $uploadOk = 1; 
            }else{
                echo "file không fair là ảnh";
                $uploadOk = 0;
            }
        }
    ?>
</body>
</html>