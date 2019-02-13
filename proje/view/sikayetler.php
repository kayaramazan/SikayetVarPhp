 
	
	 <section class="tum-sikayet">
			 	<h1 class="title">
		Tüm Şikayetler</h1>
			<?php 
			if(@$_GET["q"])
			$kayit=sikayet_cek2($_GET["q"]);
		else
			$kayit=sikayet_cek();
			while ($row = mysqli_fetch_array($kayit)){
			?>
			<div class="sikayet-tek" >
				<span class="time-box"><i class="fas fa-clock"></i><?=$row['sikayet_tarih']?></span>
				<a href="?url=firma&id=<?=$row['sikayet_firma']?>"><div class="medya-left" ><img src="<?=$row['firma_logo']?>"></div></a>
				<a href="?url=sikayet&id=<?=$row['sikayet_id']?>"><div class="medya-right"><h2><?=$row['sikayet_baslik']?></h2></div>
				<p class="sikayet-aciklama">
					<?= substr($row['sikayet_aciklama'],0,225)?>...
				</p></a>
				<div class="sikayet-kisi">
					<div class="isim">
						<img src="images/avatar.jpeg" width="36" height="36">
						<?=$row['kullanici_isim']?>
					</div>
					<div class="share"> <i class="fas fa-share-alt"></i>
					</div>
					<div class="view">
					 <i class="far fa-eye"></i> <?=$row['sikayet_goruntulenme']?>
					</div>
				</div>
			</div> 
		<? } ?>
			
			
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
				<div class="medya-left"><img src="images/46962.jpg"></div>
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
				<div class="medya-left"><img src="images/18046.jpg"></div>
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
				<div class="medya-left"><img src="images/147.jpg"></div>
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
				<div class="medya-left"><img src="images/102.jpg"></div>
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
				<div class="medya-left"><img src="images/147.jpg"></div>
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
				<div class="medya-left"><img src="images/3.jpg"></div>
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
				<div class="medya-left"><img src="images/4.jpg"></div>
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
				<div class="medya-left"><img src="images/1.jpg"></div>
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
		 		...
		 		<a>13478</a>
		 		<i class="fas fa-angle-double-right"></i>
		 	</div>
		 	
		
	</section>
	  