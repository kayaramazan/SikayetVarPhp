<?php
function sayfa_ac($sayfa,$p,$baslik=false){

$title=$baslik;
$page=$p;
	include  "header.php";
	include $sayfa;
	include "footer.php";
}

?>