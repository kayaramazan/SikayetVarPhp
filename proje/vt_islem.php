   <?php
   
   	function giris($email,$sifre)
   	{
   		$con = new mysqli("localhost", "root", "", "sikayet_var"); 
   		mysqli_set_charset($con,"utf8"); 
   		$log = mysqli_query($con,"SELECT * FROM  tbl_kullanıcı  where kullanici_eposta='".$email."' and kullanici_sifre='".$sifre."'");
   		$sonuc = mysqli_fetch_array($log);
   		if(isset($sonuc))
   		{
   			return 1;

   		}
   		else
   			return 0;

   	}

   	function sikayet_cek(){

   		$con = new mysqli("localhost", "root", "", "sikayet_var"); 
   mysqli_set_charset($con,"utf8"); 
   		$sql = mysqli_query($con,"SELECT s.*,k.*,f.firma_logo FROM  tbl_sikayet s join tbl_kullanıcı k on k.kullanici_id=s.sikayet_kullanici join
   		 tbl_firma f on s.sikayet_firma=f.firma_id  limit 10");
   		return $sql;
   	}

      function sikayet_cek2($q){

         $con = new mysqli("localhost", "root", "", "sikayet_var"); 
   mysqli_set_charset($con,"utf8"); 
         $sql = mysqli_query($con,"SELECT s.*,k.*,f.firma_logo FROM  tbl_sikayet s join tbl_kullanıcı k on k.kullanici_id=s.sikayet_kullanici join
          tbl_firma f on s.sikayet_firma=f.firma_id where s.sikayet_aciklama like '%".$q."%' OR s.sikayet_baslik like '%".$q."%' OR f.firma_adi like '%".$q."%'  limit 10");
         return $sql;
      }
  	function tekil_sikayet($id){
		$con = new mysqli("localhost", "root", "", "sikayet_var"); 
		   mysqli_set_charset($con,"utf8"); 
		   goruntulenme_arttir($id);
   		$sql = mysqli_query($con,"SELECT s.*,k.*,f.firma_logo,f.firma_adi FROM  tbl_sikayet s join tbl_kullanıcı k on  k.kullanici_id=s.sikayet_kullanici join
   		 tbl_firma f on s.sikayet_firma=f.firma_id where s.sikayet_id=".$id." ");
   		return $sql;

   	}
   	function goruntulenme_arttir($id)
   	{
   		$con = new mysqli("localhost", "root", "", "sikayet_var"); 
		   mysqli_set_charset($con,"utf8");  
   		$sql = mysqli_query($con,"UPDATE tbl_sikayet set sikayet_goruntulenme=sikayet_goruntulenme+1 where sikayet_id=".$id);	
   	}

                         ?> 