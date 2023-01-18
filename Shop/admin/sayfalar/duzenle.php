<?php
require_once './../../db.php';
require_once './../header.php';

if (isset($_POST['baslik'])) {

    $conn 
->prepare("UPDATE`sayfalar` SET baslik = ?, icerik = ?, etkin_mi = ?, sira = ? WHERE id = ?") 
->execute([$_POST['baslik'], $_POST['icerik'], $_POST['etkin_mi'], $_POST['sira'], $_GET['id']]);

    echo "Saya Başarıyla Güncellendi";

}


$sayfa = $conn->prepare("SELECT * FROM sayfalar WHERE id = ?");
$sayfa->execute([$_GET['id']]);

$sayfa = $sayfa->fetchAll()[0];
?>
<h1>Sayfa Düzenle</h1>

<form method="post">
    <input type="text" name="baslik" value="<?php echo $sayfa['baslik']; ?>" /> <br />
    <textarea name="icerik" style="width: 60%; height: 300px;">
    <?php echo $sayfa['icerik']; ?>
</textarea>
    <br />Etkin Mi:
    <label><input type="radio" name="etkin_mi" value="1" <?php if ($sayfa['etkin_mi'] == 1) { echo "checked"; } ?> /> Evet</label>
    <label><input type="radio" name="etkin_mi" value="0" <?php if ($sayfa['etkin_mi'] == 0) { echo "checked"; } ?> /> Hayır</label>
    <br /> Sıralama:
    <input type="text" name="sira" value="<?php echo $sayfa['sira']; ?>" />
    <br />
    <input type="submit" value="Sayfayı Güncelle" />
</form>

<?php
require_once './../footer.php';
?>