<?php
session_start();
include '../../taslak.php';
//İzinsiz girişleri önleme
if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
    header("Location: logout.php");
}

?>
