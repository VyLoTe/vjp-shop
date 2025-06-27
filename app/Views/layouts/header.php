<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIP Shop</title>
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/footer.css">
</head>

<body>
    
    <header>
        <button id="menu-btn" class="menu-toggle">☰</button>
        <div class="navbar-wrapper">
            <div class="left">
                <div class="download-app"><a href="#">Tải ứng dụng</a></div>
                <div class="connect"><a href="#">Kết nối</a></div>
            </div>
            <div class="right">
                <div class="notification"><a href="#">Thông báo</a></div>
                <div class="assist"><a href="#">Hỗ trợ</a></div>
                <div class="account"><a href="#">User</a></div>
            </div>
        </div>
        <div class="header-with-search">
            <div class="logo-shop">
                <img src="./public/images/logo_shop_icon.png" alt="Shop Logo" />
                <div class="shop-name">VIPshop</div>
            </div>
            <div class="search-bar">
                <form action="#" class="search-section">
                    <div class="search-input">
                        <input type="text" placeholder="Ưu đãi độc quyền" />
                        <button type="button" class="search-button">
                            <img src="./public/images/search-icon.png" alt="Search" />
                        </button>
                    </div>
                </form>
                <div class="recommend">
                    <a href="#">rec1</a>
                    <a href="#">rec2</a>
                    <a href="#">rec3</a>
                    <a href="#">rec4</a>
                    <a href="#">rec5</a>
                    <a href="#">rec6</a>
                </div>
            </div>
            <div class="logo-cart">
                <img src="./public/images/logo_cart.png" alt="Cart" />
            </div>
        </div>
    </header>
    <script src="public/js/nav-toggle.js"></script>
    