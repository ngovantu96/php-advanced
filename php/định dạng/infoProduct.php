<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin sản phẩm</title>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="infoproduct.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

    <nav class="header">
        <div class="menu">
            <ul>
                <li><a href="trangchu.php">Trang Chủ</a></li>
                <li><a href="infoProduct.php">Thông Tin Sản Phẩm</a></li>
                <li><a href="#">Mua Hàng</a></li>
                <li><a href="giohang.php"><i class="fas fa-cart-plus" id="icon"></i></a></li>


            </ul>
        </div>
    </nav>
    <div class="content">
        <div>
            <h1>Danh Sách Sản Phẩm</h1>
        </div>
        <div class="input">
            <input type="text" id="search-product" placeholder="tìm kiếm sản phẩm">
            <input id="submit" type="submit" value="Tìm">
        </div>
    </div>
    <hr>

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
    $_SESSION["id"] = $_GET['type'];
    $result = [];
    foreach ($products as $product) {
        if ($_SESSION['id'] == $product['id']) {
            array_push($result, $product);
        }
    }
    ?>
    <div class="product-info">
        <h3>Thông tin sản phẩm</h3>
        <?php
        foreach ($result as $product) : ?>
            <div class="product-img">
                <img class="img" src="<?= $product['image'] ?>">
            </div>

            <div class="info">
                <div class="sku">
                    <p>Tên sản phẩm : <?= $product['sku']; ?></p>
                </div>
                <div class="price">
                    <p>Giá : <?= $product['price'] . "00đ"; ?></p>
                </div>
                <div class="view">
                    <p>Đã Xem : <?= $product['view']; ?></p>
                </div>
                <div class="stock">
                    <p>Đã Bán : <?= $product['stock']; ?></p>
                </div>

                <div class="addgiohang">
                    <a href="giohang.php?type=<?= $product['id'] ?>" class="them" onclick="them()">ThêmVào Giỏ</a>
                </div>
                <div class="mua">
                    <a href="giohang.php?type=<?= $product['id'] ?>" class="them" onclick="mua()">Mua Ngay</a>
                </div>
                <!-- <a href="" class="them">Thêm vào Giỏ hàng</a> -->
            </div>
            <!-- <div><p>cảm ơn quý khách đã tin tưởng và sử dụng sản phẩm của của hàng. Mọi đóng góp của cúa khách sẽ làm tâng chất lượng và dịch vụ của cửa hàng. xin cảm ơn</p></div> -->
            

        <?php endforeach; ?>
    </div>
    <footer>
        <h3>Sản phẩm đã được kiểm duyệt An Toàn Thực Phẩm </h3>
        <p>Mọi thắc mắc vui lòng liên hệ : 19001009</p>
    </footer>
</body>

</html>