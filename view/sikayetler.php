

	 <section class="tum-sikayet">
			 	<h1 class="title">
		Tüm Şikayetler</h1>
			<?php
			if(@$_GET["q"])
			$kayit=sikayet_cek2($_GET["q"],$con);
		else
			$kayit=sikayet_cek($con);
			while ($row = mysqli_fetch_array($kayit)){
			?>
			<div class="sikayet-tek" >
				<span class="time-box"><i class="fas fa-clock"></i>	<?=cevir($row['kalan'])?></span>
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
		<?
	$varmi=1; }
if(@$varmi!=1)
{
?>
		<h1>Aradığınız Kriterlere Uygun Şikayet Bulunamadı</h1>
	<?php } ?>
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
