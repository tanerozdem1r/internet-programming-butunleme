

<?php
require_once("./system/function.php");
include("./Pages/header.php");
include("./Pages/navbar.php");



$p=!empty($_GET['id']) ? $_GET['id']:1;


switch($p) {
case '1';
include("./pages/home.php");
break;
case '2';
include("./pages/detail.php");
break;
case '3';
include("./pages/cart.php");
break;
case '4';
include("./kategori.php");
break;
case '5';
include("./pages/checkout.php");
break;
case '6';
include("./pages/contact.php");
break;
case '7';
include("./pages/login.php");
break;
}

include("./Pages/footer.php");
?>
