<?php
require_once './../../db.php';
require_once './../header.php';
?>
<h1>Sayfa Listele</h1>

<table width="800">
    <tr>
        <th>
            ID
        </td>
        <th>
            Başlık
        </th>
        <th>
            Etkin Mi
        </th>
        <th>
            İşlem
        </th>
    </tr>

<?php

$sayfalar = $conn->query("SELECT * FROM sayfalar ORDER BY sira ASC");

foreach ($sayfalar as $sayfa) {
    /*->fetchAll()*/
    echo '<tr>
    <td>
        '.$sayfa['sira'].'
    </td>
    <td>
        '.$sayfa['baslik'].'
    </td>
    <td>
        '.$sayfa['etkin_mi'].'
    </td>
    <td>
    <a href="duzenle.php?id='.$sayfa['sira'].'">Düzenle</a>
    <a href="sil.php?id='.$sayfa['sira'].'">Sil</a>
    </td>
</tr>';

}


?>
</table>

<?php

require_once 'footer.php';
?>