<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: #FF0000;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            border: solid 1px #ccc;
            
        }
        form{
            width: 450px;
        }
    </style>
</head>
<body>
    
    <?php 
        // tải file và kiểm tra file
        function loadRegistrations($fileName){
            $jsondata = file_get_contents($fileName);
            $arr_data = json_decode($jsondata,true);
            return $arr_data;
        }
        // lưu dữ liệu vào file
        function saveDataJSON($fileName,$name,$email,$phone){
            // xử lý bắt lỗi
            try{
                // tạo 1 đối tượng để sau đó convet mang
                $contact = array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone
                );
                // convet josondata into array
                $arr_data = loadRegistrations($fileName);
                // thêm dữ liệu vào mảng;
                array_push($arr_data,$contact);
                // cập nhật mảng trong json
                $jsondata = json_encode($arr_data,JSON_PRETTY_PRINT);
                file_put_contents($fileName,$jsondata);
                echo 'lưu trữ thành công !';
            }catch(Exception $e){
                echo 'lỗi : ',$e->getMessage();
            }
        }
            $nameErr = NULL;
            $emailErr = NULL;
            $phoneErr = NULL;
            $name = NULL;
            $email = NULL;
            $phone = NULL;
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name = $_POST["name"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $has_error = false;
                if(empty($name)){
                    $nameErr = "tên đăng nhập không được đẻ trống";
                    $has_error = true;
                }
                if(empty($email)){
                    $emailErr = "email không được để tróng";
                    $has_Errr = true;
                }else{
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $emailErr ="định dang e mail sai (xxx@axxx.xxx.xxx)!";
                        $has_error = true;
                    }
                }
                if(empty($phone)){
                    $phoneErr = "tên đăng nhập không được đẻ trống";
                    $has_error = true;
                }
                if($has_error === false){
                   saveDataJSON("data.json",$name, $email, $phone);
                    $name = NULL;
                    $email = NULL;
                    $phone = NULL;
                   
                }
            }
        
    ?>
    
            <h2>Registration Form</h2>
            <form method="post">
                <fieldset>
                    <legend>Details</legend>
                    Name: <input type="text" name="name" value="<?php echo $name; ?>">
                    <span class="error">* <?php echo $nameErr; ?></span>
                    <br><br>
                    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
                    <span class="error">* <?php echo $emailErr; ?></span>
                    <br><br>
                    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
                    <span class="error">*<?php echo $phoneErr; ?></span>
                    <br><br>
                    <input type="submit" name="submit" value="Register">
                    <p><span class="error">* required field.</span></p>
                </fieldset>
            </form>
    
            <?php
                $registrations = loadRegistrations('data.json');
            ?>
            <h2>Registration list</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                <?php foreach ($registrations as $registration): ?>
                    <tr>
                        <td><?= $registration['name']; ?></td>
                        <td><?= $registration['email']; ?></td>
                        <td><?= $registration['phone']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    
</body>
</html>