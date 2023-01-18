<?php
require_once './../../db.php';
$sayfa = $conn->prepare("DELETE FROM sayfalar WHERE id = ?");
$sayfa->execute([$_GET['id']]);

header('Location: listele.php');

?>