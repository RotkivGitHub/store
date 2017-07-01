<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/TechProduct.php';
require_once 'Utils.php';
//    require_once 'Utils.php';
$category = new Category(инструменты,1);

echo 'Категория: '.$category->getName();

echo '<br>';

echo 'slug: '.$category->getSlug();

$category->setName('тулзы');

echo '<br>';

echo 'Новое имя: '.$category->getName();

echo '<br>';

echo 'Новый slug: '.$category->getSlug();

$product = new TechProduct(1, 'Шуруповерт', '12V', 'sdasdfasdf.jpg', '250.00', 1);

echo $product->getName();
