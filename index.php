<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vip Shop</title>
</head>

<body>
    <?php
    $page = $_GET['page'] ?? 'home';

    $view = "app/Views/$page.php";

    if (file_exists($view)) {
        include 'app/Views/layouts/header.php';
        include $view;
        include 'app/Views/layouts/footer.php';
    } else {
        echo "404 - Page not found";
    } ?>
</body>

</html>