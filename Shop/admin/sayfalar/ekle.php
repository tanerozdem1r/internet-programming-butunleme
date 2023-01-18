<?php
require_once './../../db.php';
require_once './../header.php';

if (isset($_POST['baslik'])) {

    $conn 
->prepare("INSERT INTO `sayfalar` (baslik, icerik, etkin_mi, sira) VALUES (?, ?, ?, ?)") 
->execute([$_POST['baslik'], $_POST['icerik'], $_POST['etkin_mi'], $_POST['sira']]);

    echo "Saya Başarıyla Eklendi";

}

?>
<h1>Sayfa Ekle</h1>

<form method="post">
    <input type="text" name="baslik" placeholder="Sayfa Başlığı" /> <br />
    <textarea placeholder="Sayfa İçeriği" name="icerik" style="width: 60%; height: 300px;"></textarea>
    <br />Etkin Mi:
    <label><input type="radio" name="etkin_mi" value="1" /> Evet</label>
    <label><input type="radio" name="etkin_mi" value="0" /> Hayır</label>
    <br /> Sıralama:
    <input type="text" name="sira" value="0" />
    <br />
    <input type="submit" value="Sayfayı Ekle" />
</form>

<?php
require_once './../footer.php';
?>