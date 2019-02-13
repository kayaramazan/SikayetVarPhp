<?php
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
function hata_sayfasi()
{

	sayfa_ac("404.php",1,"Sayfa Bulunamadı");
}
function cikis(){
	header("Location:?url=anasayfa");
}
?>
