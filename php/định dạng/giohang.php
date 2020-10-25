<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giỏ hàng</title>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="muahang.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    </style>
</head>

<body>
    <!-- <div class="img-header" >
            <div class="tieude"><h1>Thực Shẩm Sạch - Mang Đến Sức Khỏe Cho Mọi Nhà</h1></div>
           <div class="img"><img src="images/di-sieu-thi.jpg" alt=""></div>
        </div> -->
    <nav class="header">
        <div class="menu">
            <ul>
                <li><a href="trangchu.php">Trang Chủ</a></li>
                <li><a href="infoProduct.php">Thông Tin Sản Phẩm</a></li>
                <li><a href="muahang.php">Mua Hàng</a></li>
                <li><a href="giohang.php"><i class="fas fa-cart-plus" id="icon"></i></a></li>

            </ul>
        </div>
        <?php
        function loadRegistrations($filename)
        {
            $jsondata = file_get_contents($filename);
            $arr_data = json_decode($jsondata, true);
            return $arr_data;
        }
        ?>
        <?php $products = loadRegistrations('product.json'); ?>
        <?php
        if (isset($_GET['type'])) {
            $_SESSION["id"] = $_GET['type'];
        }
        $result = [];
        foreach ($products as $product) {
            if ($_SESSION['id'] == $product['id']) {
                array_push($result, $product);
            }
        }


        ?>
        <?php 
            if(isset($_GET['action'])){
               var_dump($_POST);
            }
        ?>
        <div class="danhsach">
            <h2>giỏ hàng</h2>
            <form action="giohang.php?action=gui" method="POST">
            <table>
                <tr>
                    <th class="stt">stt</th>
                    <th class="ten-sp">tên sản phẩm</th>
                    <th class="image">hình ảnh</th>
                    <th class="gia">đơn giá</th>
                    <th class="soluong">số lượng</th>
                    <th class="tong-tien">thành tiền</th>
                    <th class="delecte">xóa</th>
                </tr>

                <?php

                foreach ($result as $product) : ?>

                    <tr>
                        <td class="stt">1</td>
                        <td class="ten-sp"><?= $product['sku']; ?></td>
                        <td class="image"><img src="<?= $product['image'] ?>" width="150px" height="150px"></td>
                        <td class="gia"><?= $product['price']; ?>đ</td>
                        <td class="soluong"><input type="text" value="" name="soluong[<?= $product['id'] ?>]"></td>
                        <td class="tong-tien"><?= $product['price'] * 2; ?>đ</td>
                        <td class="delecte"><button><a href="giohang.php?action=delecte&id=<?= $product['id']?>'">xóa</a></button></td>

                    </tr>


                <?php endforeach; ?>
            </table>
            <div class="form">
            <div class="form-input">
                    <label>Tên Khách Hàng</label>
                    <input type="text"><br>
                </div>
                <div class="form-input">
                    <label>Số điện thoại</label>
                    <input type="text"><br>
                </div>
                <div class="form-input">
                    <label>Email</label>
                    <input type="email"><br>
                </div>
                <div class="form-input">
                    <label>Địa Chỉ</label>
                    <textarea name="" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="gui"><button>Gửi</button></div>
                </div>
            </form>
        </div>

        <footer>
            <h3>Sản phẩm đã được kiểm duyệt An Toàn Thực Phẩm </h3>
            <p>Mọi thắc mắc vui lòng liên hệ : 19001009</p>
        </footer>
</body>

</html>