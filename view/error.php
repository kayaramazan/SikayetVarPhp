<?php if(@($_GET["error"]=='1')){ ?>
  <script> alert("Şifreleriniz aynı olmalıdır.");
  window.location="index.php";</script>
<?php }else if (@($_GET["error"]=='2')){ ?>
  <script> alert("Şikayet oluşturabilmek için giriş yapmalısınız");
  window.location="index.php";</script>
<?php }else if (@($_GET["error"]=='3')){ ?>
  <script> alert("Şikayet oluşturulamadı");
  window.location="index.php";</script>
<?php }else if (@($_GET["error"]=='4')){ ?>
  <script> alert("Şikayetiniz Başarıyla Oluşturuldu...");
  window.location="index.php";</script>
<?php } else if (@($_GET["error"]=='5')){ ?>
  <script> alert("Kaydınız başarılı.");
  window.location="index.php";</script>
<?php }else if (@($_GET["error"]=='6')){ ?>
<script> alert("Kullanıcı adı ya da şifreniz hatalı.");
window.location="index.php";</script>
<?php } ?>
