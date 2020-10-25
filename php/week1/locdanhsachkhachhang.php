<?php
    $customer_list = array(
        "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "img" => "img/anh1.jpg"),
        "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "img" => "img/anh2.jpg"),
        "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "img" => "img/anh3.jpg"),
        "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "img" => "img/anh4.jpg")
    );
    function searchByDate($customers,$from_date, $to_date){
        if(empty($from_date)&& empty($to_date)){
            return $customers;
        }
        $filtered_customers =[];
        foreach($customers as $customer){
            if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date))){
                continue;
            }
            if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date))){
                continue;
                $filtered_customers;
            }
            return $filtered_customers;
        }
    }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
#from, #to {
    width: 200px;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    padding: 12px 10px 12px 10px;
}
#submit {
    border-radius: 2px;
    padding: 10px 32px;
    font-size: 16px;
}
.profile{
    height: 60px;
    width: 80px;
    overflow: hidden;
}
.profile img{
    width: 100%;
}
    </style>
</head>
<body>
    <?php 
          $from_date =NULL;
          $to_date = null;
          if($_SERVER["REQUEST_METHOD"] =="POST"){
              $from_date = $_POST["from"];
              $to_date = $_POST["to"];
          }
          $filtered_customers = searchByDate($customer_list,$from_date,$to_date); 
    ?>
    <form action="#" method="post">
        Từ : <input id="from" type="text" name="from" placeholder="yyyy/mm/dd">
        Đến : <input id="to" type="text" name="to" placeholder="yyyy/mm/dd">
        <input type="submit" id="submit" value="Lọc">
    </form>
    <table border="0">
          <caption><h2>Danh sách khách hàng</h2></caption>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
          </tr>
          <?php foreach($filtered_customers as $index=> $customer): ?>
            <tr>
                <td><?php echo $index + 1;?></td>
                <td><?php echo $customer['name'];?></td>
                <td><?php echo $customer['day_of_birth'];?></td>
                <td><?php echo $customer['address'];?></td>
                <td><div class="profile"><img src="<?php echo $customer['profile'];?>"/></div> </td>
            </tr>
            <?php endforeach; ?>
        </table>
   
</body>
</html>
  
<!-- hiển thị dánh sách khách hàng -->
