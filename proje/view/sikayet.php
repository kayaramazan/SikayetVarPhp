 
	
	 <section class="tum-sikayet">
	 	<?php
	 	$kayit=tekil_sikayet($_GET["id"]);
	 		$row = mysqli_fetch_array($kayit);
	 		 	?>
			 	<h1 class="title">
		Anasayfa > <?=$row["firma_adi"]?> >  <?=$row["sikayet_baslik"]?></h1>

			<div class="sikayet-tek" style="width: auto;min-height: 400px;margin-bottom: 0;">
				<span class="time-box"><i class="fas fa-clock"></i> <?=$row["sikayet_tarih"]?></span>
				<div class="medya-left" ><img src=" <?=$row['firma_logo']?>"></div>
				<div class="medya-right"><h2>  <?=$row["sikayet_baslik"]?></h2></div>
				<nav class="side-social">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-whatsapp"></i></a>
				</nav>
				<p class="sikayet-aciklama" style="font-size:20px;margin-left: 14%;">
					  <?=$row["sikayet_aciklama"]?>
				</p>
				<div class="sikayet-kisi" style="bottom: 0;min-width: 70%;left: 21%;">
					<div class="isim">
						<img src="images/avatar.jpeg" width="36" height="36">
						 <?=$row["kullanici_isim"]?>
					</div> 
					<div class="view" style="float:right;">
					 <i class="far fa-eye"></i>  <?=$row["sikayet_goruntulenme"]?>
					</div>
				</div>

			</div> 
			<div class="sikayet-tek" style="width: 55rem;min-height: 400px; margin-bottom: 45px">
			<hr>
			<div class="cevaplar">
				<div class="cevap-logo">
					<img src="images/147.jpg">
				</div>
			<h2 class="yorum-baslik">Cevaplar</h2><br>
			
			<div class="cevap-item">
				asd
			</div>
			</div>
			<hr>
			<div class="yorum">
			<h2 class="yorum-baslik">Ziyaretçi Yorumları</h2><br>
			<h5 class="yorum-count">0 Yorum</h5>
			<hr>
			<textarea rows="3" placeholder="Yorum Ekle..."></textarea>
			<hr>

				<button class="btn-detay btn-yorum"> Gönder</button>
			</div>
		</div>
		<h1 class="benzer-title">Benzer Şikayetler</h1>
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
			</div> <div class="sikayet-tek">
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
		
	</section>
	  