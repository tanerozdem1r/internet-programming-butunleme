<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=tanershop;charset=utf8", 'root', '');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} 
 
/* Insert 
$conn 
->prepare("INSERT INTO `yorumlar`(`yorum`) VALUES (?)") 
->execute(['yorum içeriği']); 
*/ 

/* Update
$conn
->prepare("UPDATE yorumlar SET yorum = ? WHERE id = ?")
->execute(['Yiğit', 3]);
*/

/* Delete
$conn
->prepare("DELETE FROM yorumlar WHERE id = ?")
->execute([4]);
*/

/*
$yorumlar = $conn
->query("SELECT * FROM yorumlar")
->fetchAll();

foreach($yorumlar as $yorum) {
    echo "ID: " . $yorum['id'];
    echo "<br />";
    echo $yorum['yorum'];
    echo "<hr />";
}
*/

$yorum = $conn->prepare("SELECT * FROM yorumlar WHERE id = ?");
$yorum->execute([3]);

print_r($yorum->fetchAll());