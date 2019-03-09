   <?php

     function baglanti(){
       $con = new mysqli("localhost", "root", "", "sikayet_var");
         mysqli_set_charset($con,"utf8");
         return $con;
     }
     $con=baglanti();
     	function giris($email,$sifre,$con)
     	{
     		$log = mysqli_query($con,"SELECT * FROM  tbl_kullanıcı  where kullanici_eposta='"."$email"."' and kullanici_sifre='".$sifre."'");
     		$sonuc = mysqli_fetch_array($log);
     		if(isset($sonuc))

     			return $sonuc;

     		else
     			return -4;
     	}

      function bilgi_cek($id,$con)
      {
        $log = mysqli_query($con,"SELECT * FROM  tbl_kullanıcı  where kullanici_id=".$id);
      $sonuc = mysqli_fetch_array($log);
      if(isset($sonuc))

        return $sonuc;
      }
     	function sikayet_cek($con)
      {

     		$sql = mysqli_query($con,"SELECT s.*,k.*,f.firma_logo,FLOOR((CURRENT_TIMESTAMP-sikayet_tarih)) as kalan FROM
                            tbl_sikayet s join tbl_kullanıcı k on k.kullanici_id=s.sikayet_kullanici join
     		                     tbl_firma f on s.sikayet_firma=f.firma_id  limit 10");
     		return $sql;
     	}

      function sikayet_cek2($q,$con){


         $sql = mysqli_query($con,"SELECT s.*,k.*,f.firma_logo,FLOOR((CURRENT_TIMESTAMP-sikayet_tarih)) as kalan FROM
                             tbl_sikayet s join tbl_kullanıcı k on k.kullanici_id=s.sikayet_kullanici join
                             tbl_firma f on s.sikayet_firma=f.firma_id where s.sikayet_aciklama
                             like '%".$q."%' OR s.sikayet_baslik like '%".$q."%' OR f.firma_adi like '%".$q."%'  limit 10");
         return $sql;
      }
    	function tekil_sikayet($id,$con){

  		   goruntulenme_arttir($id,$con);
     		$sql = mysqli_query($con,"SELECT s.*,k.*,f.firma_logo,f.firma_adi,FLOOR((CURRENT_TIMESTAMP-sikayet_tarih)) as kalan FROM
                                  tbl_sikayet s join tbl_kullanıcı k on  k.kullanici_id=s.sikayet_kullanici join
     		                          tbl_firma f on s.sikayet_firma=f.firma_id where s.sikayet_id=".$id." ");
     		return $sql;

     	}
     	function goruntulenme_arttir($id,$con)
     	{

     		$sql = mysqli_query($con,"UPDATE tbl_sikayet set sikayet_goruntulenme=sikayet_goruntulenme+1 where sikayet_id=".$id);
     	}
      function kullanici_ekle($con){

        $email=$_POST["email"];
        $adSoyad=$_POST["adsoyad"];
        $password1=$_POST["password1"];
        $password2=$_POST["password2"];
        if ($password1!=$password2) {
          echo "<script>alert('Şifreleriniz eşleşmiyo lütfen tekrar deneyiniz');</script>";
        }
        else {

          $sql = mysqli_query($con,"INSERT INTO tbl_kullanıcı (kullanici_isim,kullanici_eposta,kullanici_sifre)VALUES
          ('".$adSoyad."','".$email."','".$password1."')");
          if ($sql) {
            return 1;
          }else {
            return 0;
          }
        }

      }
      function firma_cek($q,$con){


         $sql = mysqli_query($con,"SELECT * from tbl_firma where firma_id=".$q);
         return $sql;
      }
      function getfirma($con)
      {
        $sql = mysqli_query($con,"SELECT * from tbl_firma");
        return $sql;
      }
      function sikayet_ekle($baslik,$aciklama,$firma_id,$kul_id,$resim,$con){
        $sql = mysqli_query($con,"INSERT INTO tbl_sikayet (sikayet_baslik, sikayet_firma, sikayet_kullanici,sikayet_resim, sikayet_aciklama)
          values('$baslik','$firma_id','$kul_id','$resim','$aciklama')");
        if ($sql) {
          return 1;
        }else {
       return 0;
        }
      }
      function cevir($saniye)
      {

        if($saniye<60)
        return $saniye."sn";
        else if(($saniye>60) && ($saniye<(60*60))) {
          return floor($saniye/60)." dk";
        }
        else if(($saniye>(60*60)) && ($saniye<(60*60*24))) {
          return floor($saniye/(60*60))." saat";
        }
        else if(($saniye > (60*60*24*12)) && ($saniye < (60*60*24*30*12))) {
          return ceil($saniye/(60*60*24*12))." gün";
        }
        else if(($saniye > (60*60*24*30)) && ($saniye < (60*60*24*30*12))) {
          return floor($saniye/(60*60*24*30))." ay";
        }

      }

      function resimekle2()
     {
     $ek=rand(5, 100000000);
     $target_dir = "images/profil/";
     $target_file = $target_dir .$ek. basename($_FILES["profil"]["name"]);

     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Check if image file is a actual image or fake image

         $check = getimagesize($_FILES["profil"]["tmp_name"]);
         if($check !== false) {
             //echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

     // Check if file already exists
     if (file_exists($target_file)) {
         echo "Sorry, file already exists.";
         $uploadOk = 0;
     }
     // Check file size
    if ($_FILES["profil"]["size"] > 5000000) {
         echo "Resim boyutu fazla büyük..";
         $uploadOk = 0;
     }
     // Allow certain file formats
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
         echo "Sadece resim dosya tipleri yüklenebilir.";
         $uploadOk = 0;
     }
     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         echo "Sorry, your file was not uploaded.";
     // if everything is ok, try to upload file
     } else {
         if (@move_uploaded_file($_FILES["profil"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["profil"]["name"]). " has been uploaded.";
             $yol=$target_dir .$ek. basename($_FILES["profil"]["name"]);
         } else {
             echo "Resim Yüklenemedi lütfen tekrar deneyiniz.";
             return $target_file;
         }
              return $yol;
     }
   }

    function profil_guncelle($resim,$kul_id,$con)
    {
      $sql = mysqli_query($con,"UPDATE tbl_kullanıcı set kullanici_resim='".$resim."' where kullanici_id=$kul_id ");
      if ($sql) {
        return 1;
      }else {
     return 0;
      }
    }


























                           ?>
