<?php
    require './commons/connect.php';
    require './commons/env.php';
    include "./views/layout/header.php";
    $act = isset($_GET['act']) ? $_GET['act'] : '/';

switch ($act) {
    case '/':
        echo "Home";
        break;
    case '/products':
        echo "products";
        break;

    default:
        echo "Router không hợp lệ";
        break;
    
}
include "./views/layout/footer.php";    
?>