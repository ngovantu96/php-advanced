<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bạn đã đăng nhập thành công</h1>
  
<?php 
    require_once 'function.php';
    session_start();
    if($_SESSION['flagPermission'] == true){
        echo "đang nhập thành công".$_SESSION['fullname'];
          echo '<a href="logout.php">Đăng xuất</a>';
    }else{
    if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $data = parse_ini_file('users.ini');
        // $result = array();
       $userInfo = explode('|',$data[$username]);
      if($userInfo[0]== $username && $userInfo[1] == $password){
         
          $_SESSION['fullname'] = $userInfo[2];
          $_SESSION['flagPermission'] = true;
          echo "đang nhập thành công".$_SESSION['fullname']."<br>";
          echo '<a href="logout.php">Đăng xuất</a>';
      }
  else{
    header('location: login.php');
    
  }
    }else{
        header('location: login.php');
    }
}
?>
</body>
</html>