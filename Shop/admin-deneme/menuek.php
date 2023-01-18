<?php
require_once './../../db.php';
require_once './../header.php';

if (isset($_POST['adi'])) {

    $conn 
->prepare("INSERT INTO `menuler` (adi, etkin_mi, id) VALUES (?, ?, ?)") 
->execute([$_POST['adi'], $_POST['etkin_mi'], $_POST['id']]);

    echo "Saya Başarıyla Eklendi";

}

?>
<h1>Sayfa Ekle</h1>

<form method="post">
    <input type="text" name="adi" placeholder="Sayfa Başlığı" /> <br />
    
    <br />Etkin Mi:
    <label><input type="radio" name="etkin_mi" value="1" /> Evet</label>
    <label><input type="radio" name="etkin_mi" value="0" /> Hayır</label>
    <br /> Sıralama:
    <input type="text" name="id" value="0" />
    <br />
    <input type="submit" value="Sayfayı Ekle" />
</form>

<?php
require_once 'footer.php';
?>