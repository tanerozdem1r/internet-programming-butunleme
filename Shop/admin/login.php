<?php 
include '../db/connection.php';
session_start();
if($_POST["loggin"])
	{
		$email =$_POST["email"];
		$pass = md5($_POST["pass"]);
		$query  = $conn ->query("SELECT * FROM admin WHERE email='$email' && password='$pass'",PDO::FETCH_ASSOC);
		if ($say = $query-> rowCount() ){
			if($say > 0 ){
				setcookie("kullanici", "msb", time()+60*60);
				$_SESSION["giris"] = sha1(md5("var"));
				echo "<script> window.location.href='adminHome.php'; </script>";
			  } else {
				echo "<script>
					  alert('Hatalı giriş!'); window.location.href='index.php?hata';
					</script>";
			  }
		}
        else{
            echo "<alert>Hata. Kullanıcı adı veya şifre hatalı.</alert>";
            header("location: index.php?hata");
        }
	}
?>