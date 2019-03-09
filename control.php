<?php

	function uye_ekle()
		{

						sayfa_ac("uye_ekle.php",0,"Müşteri Memnuniyetin Adresi");
		}

		function anasayfa()
		{

			sayfa_ac("anasayfa.php",0,"Müşteri Memnuniyetin Adresi");
		}

		function sikayet_yaz()
		{
			sayfa_ac("sikayet-yaz.php",1,"Müşteri Memnuniyetin Adresi");
		}
		function sikayetler()
		{
		sayfa_ac("sikayetler.php",2,"Tüm Şikayetler");
		}
		function sikayet()
		{
		sayfa_ac("sikayet.php",1,"Tüm Şikayetler");
		}
		function profil()
		{
		 sayfa_ac("profil.php",1,"Müşteri Memnuniyetin Adresi");
		}
		function firma(){
			sayfa_ac("firma.php",1,"Müşteri Memnuniyetin Adresi");

		}
		function hata_sayfasi()
		{

			sayfa_ac("404.php",1,"Sayfa Bulunamadı");
		}
		function yayinlanma_sureci()
		{
		 sayfa_ac("yayinlanma_sureci.php",1,"Şikayet Yayımalama Süreci");
		}




		function cikis(){
			header("Location:?url=anasayfa");
		}
?>
