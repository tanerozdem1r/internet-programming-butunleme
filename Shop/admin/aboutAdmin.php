<?php include_once '../db/connection.php';

?>
<?php include_once 'include/inc_headAdmin.php'; ?>
<body>
  <?php 
  include_once 'include/inc_headerAdmin.php'; 
  include_once 'include/inc_sidebarAdmin.php'; 
  include_once 'include/inc_pageSecurity.php'; 
  ?>
  <main>
  <?php
        if(@$_POST["submit"]){
            $sil=$conn->prepare("DELETE FROM `hakkimizda`");
            $sil->execute();
            $baslik = htmlspecialchars($_POST["baslik"],ENT_QUOTES,'UTF-8');
            $alt_baslik = htmlspecialchars($_POST["alt_baslik"],ENT_QUOTES,'UTF-8');
            
            $ekle = $conn->prepare("INSERT INTO `hakkimizda`(`baslik`, `govde`) VALUES (:baslik, :govde)");
            $ekle->bindValue(":baslik", $baslik , PDO::PARAM_STR);
            $ekle->bindValue(":govde", $alt_baslik , PDO::PARAM_STR);
            if ($ekle->execute()) {
              echo "<alert>Düzenleme işlemi başarılı</alert>";
            }
            else{
                //print_r($ekle-> errorInfo());
                header("location: aboutAdmin.php?i=hata");
            }
        }

        $cek=$conn->prepare("SELECT * FROM `hakkimizda` ORDER BY `id` DESC LIMIT 1");
        $cek->execute();
        $row=$cek->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
      <form method="post">
        <div class="form-group mt-5 pt-5">
          <label for="exampleFormControlInput1">Email</label>
          <input type="text" class="form-control" name="baslik" id="exampleFormControlInput1" placeholder="Başlık" value="<?= $row["baslik"]?>">
        </div>
        <hr>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="alt_baslik" rows="10" placeholder="Hakkımızda yazısı bu kısma girilecek"><?= $row["govde"]?></textarea>
          <input type="submit" value="Düzenle" name="submit" class="btn btn-success mt-2">
        </div>
      </form>
    </div>
  </main>


  <?php include 'include/inc_footer.php'; ?>

</body>

</html>