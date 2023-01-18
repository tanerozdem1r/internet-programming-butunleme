<?php
include_once '../db/connection.php';
include_once 'include/inc_headAdmin.php';
?>

<body>
    <?php
    include_once 'include/inc_headerAdmin.php';
    include_once 'include/inc_sidebarAdmin.php';
    include_once 'include/inc_pageSecurity.php';
    ?>
    <?php 
    if(@$_POST["submit"]){
        $idtext = htmlspecialchars($_POST["idtext"],ENT_QUOTES,'UTF-8');
        $kisitext = htmlspecialchars($_POST["kisitext"],ENT_QUOTES,'UTF-8');
        $unvantext = htmlspecialchars($_POST["unvantext"],ENT_QUOTES,'UTF-8');
        $govdetext = htmlspecialchars($_POST["govdetext"],ENT_QUOTES,'UTF-8');
       
       
        $ekle=$conn->prepare("UPDATE `musteriler` SET `kisi` = :kisi, `unvan` = :unvan, `govde` = :govde WHERE `id` = :id");

        $ekle->bindValue(":id", $idtext , PDO::PARAM_INT);
        $ekle->bindValue(":kisi", $kisitext , PDO::PARAM_STR);
        $ekle->bindValue(":unvan", $unvantext , PDO::PARAM_STR);
        $ekle->bindValue(":govde", $govdetext , PDO::PARAM_STR);
        if ($ekle->execute()) {
            echo "<alert>Düzenleme işlemi başarılı</alert>";
        }
        else{
            //print_r($ekle-> errorInfo());
            header("location: clientAdmin.php?i=hata");
        }
    }
    
    ?>

    <form method="post">
        <div class="container mt-5 pt-5">
        <div class="form-group">
            <label for="exampleFormControlInput1">Id</label>
            <input type="text" class="form-control" name="idtext" id="idtxt" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Kişi</label>
            <input type="text" class="form-control" name="kisitext" id="kisitxt" placeholder="Kişi">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ünvan</label>
            <input type="text" class="form-control" name="unvantext" id="idtxt" placeholder="Ünvanı">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Örnek textarea</label>
            <textarea class="form-control" id="txtarea" name="govdetext" rows="7" placeholder="Yazınızı Buradan Güncelleyebilirsiniz."></textarea>
        </div>
            <input type="submit" name="submit" class="btn btn-success mt-2" value="Güncelle">
        </div>
    </form>



    <?php
    include 'include/inc_footer.php';
    ?>

</body>

</html>