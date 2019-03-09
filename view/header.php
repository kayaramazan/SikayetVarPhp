<!DOCTYPE html>
<html>

<meta charset="utf-8"/>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/favicon.ico">

	<title><?=$title ?> - Şikayetvar</title>
</head>
<body >
	<?php
	 	include "vt_islem.php";
		include "error.php";
		  ?>

	<!-- Modallar BAşlangıç -->
<div class="uye-ol">
	<i class="fa fa-times" id="uye-kapat" onclick="uyepanel_kapa()"></i>
	<form class="" action="?url=uye_ekle" method="post">
		<div class="uye-form">
		<label class="baslik-lbl">Üye Ol</label>
		<div class="uye-social">
			<i class="fab fa-google-plus-g"></i>
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-linkedin-in"></i>
		</div>

		<label class="baslik-lbl-veya">veya</label>
		<div class="uye-bilgi">
			<label>Ad ve Soyad</label>
			<input type="text" class="form-text" name="adsoyad" required >

			<label>E-posta</label>
			<input type="email" name="email" class="form-text" required>

			<label style="width: 100%;text-align: left;">Şifre</label>
			<div class="alan-sifre">
			<input type="password" placeholder="En az 6 karakter" name="password1" class="form-text psswrd" required>
			<input type="password" placeholder="En az 6 karakter"  name="password2" class="form-text psswrd" required>
		</div>

			<div class="kosul">"Üye Ol" butonuna tıklayarak Şikayetvar'ın <a href="#">Kullanıcı, KVKK ve Çerez Sözleşmeleri</a>’ni kabul etmiş sayılacaksınız.</div>
			<div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc2PQwUAAAAAM2yTirb4gDoHoOInAeB2pvQnS6a&amp;co=aHR0cHM6Ly93d3cuc2lrYXlldHZhci5jb206NDQz&amp;hl=tr&amp;v=v1548052318968&amp;theme=light&amp;size=normal&amp;cb=20y0fqmaylml" width="304" height="78" role="presentation" name="a-gn4v0acr8nle" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandboxarama"></iframe></div>

				<button type="submit" class="btn-detay" > Üye Ol</button>
				<div class="already">Zaten üye misiniz? <span class="reg-login" onclick="girispanel()">Giriş Yap</span></div>
		</div>
	</div>
</form>
 </div>
 <div class="uye-ol giris-panel" >
	<i class="fa fa-times" id="uye-kapat" onclick="girispanel_kapa()"></i>
	<form method="post" action="">
	<div class="uye-form">
		<label class="baslik-lbl">Giriş Yap</label>
		<div class="uye-social">
			<i class="fab fa-google-plus-g"></i>
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-linkedin-in"></i>
		</div>

		<label class="baslik-lbl-veya">veya</label>
		<div class="uye-bilgi">
			<label>Eposta veya Cep Telefonu</label>
			<input type="text" class="form-text" name="email" >

			<label>Şifre</label>
			<input type="password" name="sifre" class="form-text" >



			<a href="#" class="sifre-unut" onclick="sifrepanel()">Şifremi unuttum</a>


				<button class="btn-detay"  name="kayit" >Giriş Yap</button>
			</div>
		<label class="baslik-lbl-hesap">Hesabın yok mu?</label>
				<button type="button" class="btn-detay btn-green" onclick="uyepanel()">Üye Ol</button>
</form>
		</div>
	</div>
 </div>
 <div class="uye-ol sifre-panel"  >
	<i class="fa fa-times" id="uye-kapat" onclick="sifrepanel_kapa()"></i>
	<div class="uye-form">
		<label class="baslik-lbl">Şifremi Unuttum</label>
		<div class="uye-bilgi">
			<label>Eposta veya Cep Telefonunuzu giriniz</label>
			<input type="mail" class="form-text" name="mail" >
			<button class="btn-detay" >Şifremi Sıfırla</button>

		<span class="geri-don" onclick="girispanel()"><i class="fa fa-arrow-left"></i> Geri Dön</span>

		</div>
	</div>
 </div>
 <?php
 session_start();
 if (isset($_POST["kayit"])=="Giriş Yap"){
 $kullanici=giris($_POST["email"],$_POST["sifre"],$con);
 if(@$kullanici["kullanici_id"])
 {
 @$_SESSION["durum"]=1;
	$_SESSION["kullanici_id"]=@$kullanici["kullanici_id"];
	}
	else {
	$_SESSION["durum"]=0;
	header("Location:index.php?error=6");
}
}
if (isset($_POST["cikis"])) {
	$_SESSION["durum"]=0;
	header("Location:index.php");
}
if (isset($_POST["search"])) {
	$q=$_POST["arama"];
	header("Location:?url=sikayetler&q=".$q);
}
if (isset($_POST["sikayet-ekle"])) {
if($_SESSION["durum"]==0)
{
?>
<script type="text/javascript">
window.location="?url=sikayet-yaz&error=2"
</script>
<?php
}
 else {

	if(sikayet_ekle($_POST["baslik"],$_POST["sikayet"],$_POST["firma_id"],$_POST["kul_id"],$_POST["gorsel"],$con))
	{
	header("Location:?url=sikayetler&error=4");
	}

}
}

 if (@$page==0) {

?>
<div class="home">
		<div class="home-slider" style="background-image: url(images/371.jpg);"  >

			<header id="hh">
				<div id="row">
					<div id="logo">
						<img src="images/sikayetvar-logo-homepage.svg" width="200" height="59" id="logo-img">
					</div>
					<form action="" method="post ">
						<div id="src">
				<div class="search-bar" style="width: 33%;float: left;margin-top:0px;padding: 0px 5px 0px 19px; height: 41px;margin-left: 35px;box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.6);background-color: #fff; ">
					<input type="text" name="arama" class="input-search" placeholder="Şikayet veya marka arayın..." autocomplete="off" style="padding: 8px 10px;font-size: 16px;">
					<button class="btn-arama" name="search" style="width: 33px;height: 32px;"><img src="images/search.png" width="23" height="23" style="margin: 5px"></button>
				</div></form>

				</div>
					<div id="uye-ekran">
						<?php
						if (@$_SESSION["durum"]!='1') {

						?>
						<a href="#" class="uye-link" onclick="girispanel()">Giriş Yap</a>
						<a href="#" class="uye-link" onclick="uyepanel()">Üye Ol</a>
					<? }
					else{
					 ?>
					 <form method="post" action="">
						<div class="user"><img src="images/avatar.jpeg" width="36" height="36" class="img-profil">
						<ul class="profil-menu">
							<a href="#"><li>Şikayetlerim</li></a>
							<a href="?url=profil"><li>Profilim</li></a>
							<a href="#"><li>Bildirimlerim</li></a>
							<button name="cikis"><a href="#"><li>Çıkış Yap <i class="fa fa-arrow-right"></i></li></a></button>
						</ul>
					</div>
						</form>
					<?  } ?>
						<a href="?url=sikayet_yaz" id="sikayet" class="btn">Şikayet Yaz</a>

					</div>
				</div>
			</header>
			<section class="search"><form action="" method="post">
				<a href="#"><b>84.088</b> kayıtlı marka için son 24 saatte gelen şikayet sayısı: <b>5.013</b></a>
				<div class="search-bar">
					<input type="text" name="arama" class="input-search" placeholder="Şikayet veya marka arayın..." autocomplete="off">
					<button name="search"  class="btn-arama"><img src="images/search.png" width="28" height="28" style="margin: 6px"></button >
				</div></form>
			</section>
		</div>
	</div>
<?php
 }else {
 	?>
 	<header id="hh2">
				<div id="row">
					<div id="logo">
						<a href="?url=anasayfa">
						<img src="images/logo.svg" width="" height="59" id="logo-img">
						</a>
					</div>
					<form action="" method="post">
					<div id="src2">
				<div class="search-bar" style="width: 50%;float: left;margin-top:0px;padding: 1px 5px 0px 15px; height: 51px;margin-left: 35px;box-shadow: -5px 9px 30px 0px rgba(0, 0, 0, 0.05);background-color: #fff; ">
				<?php

				if(@strlen($_GET["q"])>0)
					{
				?>


					<div class="q-kapsa">
						<span class="arama-type"><?=$_GET["q"]?>&nbsp;&nbsp; <font onclick="q_iptal()" color="#ccc">x</font></span>
					</div>
					<input type="text" name="arama" class="input-search"  placeholder="" autocomplete="off" style="padding: 12px 0px;   font-family: 'Nunito',sans-serif;font-size: 16px;">
				<?php }else { ?>
					<input type="text" name="arama" class="input-search" placeholder="Şikayet veya marka arayın..." autocomplete="off" style="padding: 12px 0px;   font-family: 'Nunito',sans-serif;font-size: 16px;"><? }  ?>
					<button type="submit" name="search" class="btn-arama"><i class="fas fa-search"></i></button>
				</div>
			</form>
				</div>
					<div id="uye-ekran">
						<?php
						if (@$_SESSION["durum"]!=1) {

						?>
						<a href="#" class="uye-link" onclick="girispanel()">Giriş Yap</a>
						<a href="#" class="uye-link" onclick="uyepanel()">Üye Ol</a>
					<? }
					else
					{ ?>  <form method="post" action="">
						<div class="user"><img src="images/avatar.jpeg" width="36" height="36" class="img-profil">
						<ul class="profil-menu">
							<a href="#"><li>Şikayetlerim</li></a>
							<a href="?url=profil"><li>Profilim</li></a>
							<a href="#"><li>Bildirimlerim</li></a>
							<button name="cikis"><a href="#"><li>Çıkış Yap <i class="fa fa-arrow-right"></i></li></a></button>
						</ul>
					</div>
						</form>
					<? } ?>
						<a href="?url=sikayet_yaz" id="sikayet" class="btn">Şikayet Yaz</a>

					</div>
				</div>
			</header>
			<?php
 }?>
