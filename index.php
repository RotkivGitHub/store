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
require_once "Utils.php";
require_once 'DB/DBManager.php';
require_once 'Entity/CategoriesRelation.php';
require_once 'Rout.php';
require_once 'Controllers/IController.php';
require_once 'Controllers/BasketController.php';
require_once 'Controllers/CategoriesController.php';
require_once 'Controllers/ContactsController.php';
require_once 'Controllers/Error404Controller.php';
require_once 'Controllers/MainController.php';
require_once 'Controllers/ProductController.php';



//$relation = new CategoriesRelation();
//$categories = $relation->getCategoryById(1);
//print $categories->getName();

//var_dump($SERVER["REQUEST_URI"]);


//$db = DBManager::getDB();

//$db->getUsers();

//$ar=$db->getAllData(users);


(new Rout())->resp();
