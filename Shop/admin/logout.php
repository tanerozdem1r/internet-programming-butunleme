<?php
session_destroy();
session_unset();
unset($_SESSION['oturum']);
echo "<script> window.location.href='index.php'</script>";
setcookie("kullanici","",time()-1);

?>