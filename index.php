

<?php
			include "view/gorunum.php";
			include "control.php";
			$url=@$_GET["url"];
			 (function_exists ($url))?$url():anasayfa(); 

 ?>
