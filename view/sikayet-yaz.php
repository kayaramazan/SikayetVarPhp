



<form class="" action="" method="post">

<section id="container">
			<h1>Şikayet Yaz</h1>
			<div class="form">
				<label class="baslik-lbl">Şikayet Başlığı</label><br>
				<input type="text" class="form-text txt-bas" name="baslik"  onfocus="labelcolor('.baslik-lbl')" required>

				<label class="baslik-lbl dgr-bas">Şikayetiniz</label><br>
				<textarea class="form-text area" name="sikayet" rows="5" onfocus="labelcolor('.dgr-bas')" required></textarea>

				<label class="baslik-lbl sik-firma">Şikayetçi Olduğunuz Firma</label><br>
        <select class="form-text txt-bas" name="firma_id" onfocus="labelcolor('.sik-firma')" >

<?php
$firma=getfirma($con);

 while ($row = mysqli_fetch_array($firma)){
   ?>
          <option value="<?=$row['firma_id'] ?>"><?=$row['firma_adi'] ?></option>
        <?php } ?>
        </select>

				<label class="baslik-lbl sik-gorsel">Varsa Şikayetinize Dair Görseller</label><br>
				<input type="file" name="gorsel" class="gorsel-file" multiple onfocus="labelcolor('.sik-gorsel')" value="Fotoğraf">
        <input type="hidden" name="kul_id" value="<?=$_SESSION["kullanici_id"]; ?>">
				<button class="btn-detay" type="submit" name="sikayet-ekle"> Gönder</button>
			</div>

	 	</section>

		</form>
