

<?php
include "view/gorunum.php";
include "control.php";
$url=@$_GET["url"];
if(isset($_GET['url'])){
    $requestedOperation = $_GET['url'];
$requestedOperation();
/*
switch ($url) {
	case 'anasayfa': 	anasayfa();		break;
	case 'sikayet_yaz': sikayet_yaz();	break;
	case 'sikayetler':  sikayetler();	break;
	case 'sikayet': sikayet(); 			break;
	case 'cikis' :cikis();				break;
	default:
	hata_sayfasi();
		break;
}*/
}
else
{
	anasayfa();
}

 ?>
