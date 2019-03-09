<section id="container">

<?php

 if($_SESSION["durum"]==0)
 {
 ?>

 <script type="text/javascript">
   window.location="index.php?url=hata_sayfasi";
 </script>
<?php
 }

if (@$_POST) {
  $resim=resimekle2();
  $ppdedgisim=profil_guncelle($resim,$_SESSION["kullanici_id"],$con); 
}

$kullanici=bilgi_cek($_SESSION["kullanici_id"],$con); ?>
  <h1>Profilim</h1>
<div class="kapsa">
  <div class="profil-sol">
    <div class="profil-tamamlama">
    <div class="avatar">
      <div class="file-up">
        <i class="fas fa-camera"></i><br>Resmi Değiştir
      </div>
      <form method="post" action="?url=profil"  enctype="multipart/form-data" >
      <input type="file" name="profil"  onmouseover="resimac()" onchange="btndgs()" onmouseout="resimkapa()" >
      <button type="submit" id="btn-dgs" name="button">Değiştir</button>
    </form>
      <img src="<?=$kullanici["kullanici_resim"]; ?>" alt="">
    </div>

    <span class="prf-isim"><?=$kullanici["kullanici_isim"]; ?></span>
    </div>
    <div class="prf-sehir">
      <span>ISTANBUL</span>
    </div>
    <button type="button" name="button" onclick="return alert('Hesabınızı Silmek İstediğinize emin misiniz?')" class="btn-hesap-sil">Hesabımı Sil</button>
  </div>
  <div class="profil-bilgi">
    <h2>Üyelik Bilgileri</h2>
    <div class="item">
      <h3 class="titlre">Ad Soyad :</h3>
      <span><?=$kullanici["kullanici_isim"]; ?></span>
      <a href="#" class="btn-detay btn-upt"> Güncelle</a>
    </div>
    <div class="item">
      <h3 class="titlre">E-posta :</h3>
      <span><?=$kullanici["kullanici_eposta"]; ?></span>
      <a href="#" class="btn-detay btn-upt"> Güncelle</a>
    </div>
    <div class="item">
      <h3 class="titlre">Telefon :</h3>
      <span><?=$kullanici["kullanici_tel"]; ?></span>
      <a href="#" class="btn-detay btn-upt"> Güncelle</a>
    </div>
    <div class="item">
      <h3 class="titlre">Şifre :</h3>
      <span>********</span>
      <a href="#" class="btn-detay btn-upt"> Güncelle</a>
    </div>
  </div>

</div>
</section>
