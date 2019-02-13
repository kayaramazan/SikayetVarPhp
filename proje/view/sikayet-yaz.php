 
	
	 	<section id="container"> 
	 		
			<h1>Şikayet Yaz</h1>
			<div class="form">
				<label class="baslik-lbl">Şikayet Başlığı</label><br>
				<input type="text" class="form-text txt-bas" name="baslik"  onfocus="labelcolor('.baslik-lbl')"> 

				<label class="baslik-lbl dgr-bas">Şikayetiniz</label><br>
				<textarea class="form-text area" name="sikayet" rows="5" onfocus="labelcolor('.dgr-bas')"></textarea>

				<label class="baslik-lbl sik-firma">Şikayetçi Olduğunuz Firma</label><br>
				<input type="text" class="form-text txt-bas" name="baslik"  onfocus="labelcolor('.sik-firma')"> 

				<label class="baslik-lbl sik-gorsel">Varsa Şikayetinize Dair Görseller</label><br>
				<input type="file" name="gorsel" class="gorsel-file" multiple onfocus="labelcolor('.sik-gorsel')" value="Fotoğraf">

				<button class="btn-detay"> Gönder</button>
			</div>
		
	 	</section> 	