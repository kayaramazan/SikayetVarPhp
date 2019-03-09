<div class="doldur">

</div>
<?php
$kayit=firma_cek(isset($_GET["id"]),$con);
@$row = mysqli_fetch_array($kayit);

 ?>
<div class="banner" style="background-image: url('images/kapak/130.jpg');">
<div class="firma-veri">
  <span class="img-firma">
    <img src="<?=$row['firma_logo']?>" alt="">
    <h3><?=$row['firma_adi']?></h3>
  </span>

  <div class="sikayet-veri">
    <h1>147</h1>
    <span>ŞİKAYET</span>
  </div>
  <div class="sikayet-veri veri-tsk">
    <h1>128</h1>
    <span>TEŞEKKÜR</span>
  </div>
  <div class="sikayet-veri veri-mem ">
    <h1>%94</h1>
    <span>MEMNUNİYET DÜZEYİ</span><br>
    <span>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="far fa-star"></i>
    </span>
  </div>
<span class="bos-yazi">  * Veriler son bir yıla aittir.</span>

<button class="btn-detay btn-yorum m-sika-yaz" style=""> Markaya Şikayet Yaz</button>
</div>
</div>
<section class="tum-sikayet" style="min-height:700px;">

  <div class="sikayet-tek">
    <span class="time-box"><i class="fas fa-clock"></i> 19 d</span>
    <div class="medya-left"><img src="images/9876.jpg"></div>
    <div class="medya-right"><h2>Ziraat Bankası Mobil Uygulama Sorunu</h2></div>
    <p class="sikayet-aciklama">
      Dün akşam saatlerinde Predunyam.com'dan aldığım noob paketi bana teslim edilmedi ve üstünü param gitti ve mail attığım zaman buradan bana şikayet yazmamı söylediler inşallah bu durum sonuçlanır. Predunyam.com b…
    </p>
    <div class="sikayet-kisi">
      <div class="isim">
        <img src="images/avatar.jpeg" width="36" height="36">
        Yılmaz
      </div>
      <div class="share"> <i class="fas fa-share-alt"></i>
      </div>
      <div class="view">
       <i class="far fa-eye"></i> 135
      </div>
    </div>
  </div>
  <div class="sikayet-tek">
    <span class="time-box"><i class="fas fa-clock"></i> 19 d</span>
    <div class="medya-left"><img src="images/9876.jpg"></div>
    <div class="medya-right"><h2>Ziraat Bankası Mobil Uygulama Sorunu</h2></div>
    <p class="sikayet-aciklama">
      Dün akşam saatlerinde Predunyam.com'dan aldığım noob paketi bana teslim edilmedi ve üstünü param gitti ve mail attığım zaman buradan bana şikayet yazmamı söylediler inşallah bu durum sonuçlanır. Predunyam.com b…
    </p>
    <div class="sikayet-kisi">
      <div class="isim">
        <img src="images/avatar.jpeg" width="36" height="36">
        Yılmaz
      </div>
      <div class="share"> <i class="fas fa-share-alt"></i>
      </div>
      <div class="view">
       <i class="far fa-eye"></i> 135
      </div>
    </div>
  </div>
  <div class="sikayet-tek">
    <span class="time-box"><i class="fas fa-clock"></i> 19 d</span>
    <div class="medya-left"><img src="images/9876.jpg"></div>
    <div class="medya-right"><h2>Ziraat Bankası Mobil Uygulama Sorunu</h2></div>
    <p class="sikayet-aciklama">
      Dün akşam saatlerinde Predunyam.com'dan aldığım noob paketi bana teslim edilmedi ve üstünü param gitti ve mail attığım zaman buradan bana şikayet yazmamı söylediler inşallah bu durum sonuçlanır. Predunyam.com b…
    </p>
    <div class="sikayet-kisi">
      <div class="isim">
        <img src="images/avatar.jpeg" width="36" height="36">
        Yılmaz
      </div>
      <div class="share"> <i class="fas fa-share-alt"></i>
      </div>
      <div class="view">
       <i class="far fa-eye"></i> 135
      </div>
    </div>
  </div>
  <div class="sikayet-tek">
    <span class="time-box"><i class="fas fa-clock"></i> 19 d</span>
    <div class="medya-left"><img src="images/9876.jpg"></div>
    <div class="medya-right"><h2>Ziraat Bankası Mobil Uygulama Sorunu</h2></div>
    <p class="sikayet-aciklama">
      Dün akşam saatlerinde Predunyam.com'dan aldığım noob paketi bana teslim edilmedi ve üstünü param gitti ve mail attığım zaman buradan bana şikayet yazmamı söylediler inşallah bu durum sonuçlanır. Predunyam.com b…
    </p>
    <div class="sikayet-kisi">
      <div class="isim">
        <img src="images/avatar.jpeg" width="36" height="36">
        Yılmaz
      </div>
      <div class="share"> <i class="fas fa-share-alt"></i>
      </div>
      <div class="view">
       <i class="far fa-eye"></i> 135
      </div>
    </div>
  </div>
  <div class="sayfalama">

   <i class="fas fa-angle-double-left"></i>
   <a class="active">1</a>
   <a>2</a>
   <a>3</a>
   <a>4</a>
   <a>5</a>
   <a>6</a>
   <a>7</a>
   <i class="fas fa-angle-double-right"></i>
 </div>

</section>
