<?php
session_start();
if (isset($_GET['type'])) {
    $_SESSION['id'] = $_GET['type'];
    header('location: infoProduct.php');
    header('location: giohang.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chủ</title>
    <link rel="stylesheet" href="product.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    <?php
    $products = loadRegistrations('product.json');
    ?>

    <?php; ?>
    <div class="sanpham-noibat">
        <h2>Sản phẩm nổi bật</h2>
        <?php
        $arrViewsort = $products;
        usort($arrViewsort, function ($a, $b) {
            return $b['view'] - $a['view'];
        });
        $arrViewMax  = array_slice($arrViewsort, 0, 4);
        ?>
        <?php
        foreach ($arrViewMax as $product) : ?>
            <div class="product">
                <p class="sku"><?= $product['sku']; ?></p>
                <a href="infoProduct.php?type=<?= $product['id'] ?>"><img class="image" src="<?= $product['image'] ?>" alt=""></a>
                <br>
                <div class="price">
                    <span class="price">Giá : <?= $product['price'] . "00đ"; ?></span>
                </div>
                <div class="div-view">
                    <span class="view">Đã Xem : <?= $product['view']; ?></span>
                </div>
                <div class="stock">
                    <span class="stock">Đã Bán : <?= $product['stock']; ?></span>
                </div>

                <div class="giohang">
                    <a href="giohang.php?type=<?= $product['id'] ?>" class="them" onclick="them()">Thêm Vào Giỏ</a>
                </div>
                <!-- <a href="" class="them">Thêm vào Giỏ hàng</a> -->
            </div>
        <?php endforeach; ?>

    </div>

    <div class="sanpham-noibat">
        <h2>Sản phẩm bán chạy nhất</h2>
        <?php
        usort($products, function ($a, $b) {
            return $b['price'] - $a['price'];
        });
        $arrPrice  = array_slice($products, 0, 4);
        ?>
        <?php
        foreach ($arrPrice as $product) : ?>
            <div class="product">
                <p class="sku"><?= $product['sku']; ?></p>
                <a href="infoProduct.php?type=<?= $product['id'] ?>"><img class="image" src="<?= $product['image'] ?>" alt=""></a>
                <br>
                <div class="price">
                    <span class="price">Giá : <?= $product['price'] . "00đ"; ?></span>
                </div>
                <div class="div-view">
                    <span class="view">Đã Xem: <?= $product['view']; ?></span>
                </div>
                <div class="stock">
                    <span class="stock">Đã Bán : <?= $product['stock']; ?></span>
                </div>

                <div class="giohang">
                    <a href="giohang.php?type=<?= $product['id'] ?>" class="them" onclick="them()">Thêm Vào Giỏ</a>
                </div>
                <!-- <a href="" class="them">Thêm vào Giỏ hàng</a> -->
            </div>
        <?php endforeach; ?>
    </div>

    <div class="product-view">
        <h2>Sản Phẩm Mới Cập Nhật</h2>

        <?php
        foreach ($products as $product) : ?>
            <div class="product">
                <p class="sku"><?= $product['sku']; ?></p>
                <a href="trangchu.php?type=<?= $product['id'] ?>"><img class="image" src="<?= $product['image'] ?>" alt=""></a>
                <br>
                <div class="price">
                    <span class="price">Giá : <?= $product['price'] . "00đ"; ?></span>
                </div>
                <div class="div-view">
                    <span class="view">Đã Xem: <?= $product['view']; ?></span>
                </div>
                <div class="stock">
                    <span class="stock">Đã Bán : <?= $product['stock']; ?></span>
                </div>

                <div class="giohang">
                    <a href="giohang.php?type=<?= $product['id']; ?>" class="them" onclick="them('$id')">Thêm Vào Giỏ</a>
                </div>
                <!-- <a href="" class="them">Thêm vào Giỏ hàng</a> -->
            </div>

        <?php endforeach; ?>

    </div>




    <div class="nav-page">
        <nav class="nav-box-page" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    <footer>
        <h3>Sản phẩm đã được kiểm duyệt An Toàn Thực Phẩm </h3>
        <p>Mọi thắc mắc vui lòng liên hệ : 19001009</p>
    </footer>
</body>

</html>