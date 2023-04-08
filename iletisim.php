<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<meta name="viewport" content-type="width=device-width, initial-scale=1.0">
<META name="author" content="Genç Yapı Malzemeleri `Tasarım Lideri`">
<META name="description" content="Genç Yapı Malzemeleri, Dekorasyon, Kapı, Parke">
<meta name="abstract" content="Genç Yapı Malzemeleri ">
<meta name="keywords" content="genc yapi merkezi, genç yapı merkezi,genç yapı,genc yapi,kapı modelleri, parke, dekorasyon, melamin kapı, pvc kapı, meblan kapı, stone kapı, laminent parke, lamine parke, marküteri parke, iç dekorasyon, villa dekorasyonu, konut dekorasyon, ev dekorasyon, bina dekorasyon,ofis dekorasyon, iş yeri dekorasyon, balçova ,izmir ,izmir balçova">
<meta http-equiv="Copyright" content="Genç Yapı Malzemeleri">
<meta name="googlebot" content="index, follow" />
<meta name="robots" content="index, follow" />
<title>Genç Yapı Zemin|İletişim</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
</head>

<body>
<?php $page=5; require"navigatiorbar.php";?>
<div id="banner"> 
  <center><img src="img/contactbanner.jpg"></center>
</div>
<div id="container">
  <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d657.4182536530299!2d27.049505147555617!3d38.39002650033561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdc43e0741d89%3A0x1a6c34548d9610a1!2zS29ydXTDvHJrLCBTYXJtYcWfxLFrIENkLiAzMy0xLCAzNTMzMCBCYWzDp292YS_EsHptaXI!5e0!3m2!1str!2str!4v1466724691249" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
  </div>
  <div id="contact_container">
      	<?php
			session_start();
			if(@$_POST["gonder"]=="GÖNDER")
			{
				include "admin/ayar.php";
				$ad_sad=$_POST["ad_sad"];
				$mail=$_POST["mail"];
				$konu=$_POST["konu"];
				$mesaj=$_POST["mesaj"];
				mysqli_query($db,"insert into mesaj (ad_sad,mail,konu,mesaj) values('".$ad_sad."','".$mail."','".$konu."','".$mesaj."')");
			}
			
		?>
   <form method="post">
     <font>Ad Soyad :</font><br>
     <input type="text" name="ad_sad"><br>
     <font>E-posta :</font><br>
     <input type="text" name="mail"><br>
     <font>Konu :</font><br>
     <input type="text" name="konu"><br>
     <font>Mesaj :</font><br>
     <textarea name="mesaj"></textarea><br>
     <input type="submit" value="GÖNDER" name="gonder">
   </form>
   <?php include "admin/ayar.php"; $sql=mysqli_query($db,"select adres,mail,tel from ilet");$kayit=mysqli_fetch_array($sql); ?>
   <div id="contact">
      <h1></h1>
      <img src="img/navigationi.png"><p><?php echo $kayit["adres"];?></p>
      <a href=" <?php echo "tel:".$kayit["tel"]; ?>"><img src="img/phone.png"><p><?php echo $kayit["tel"];?></p><a>
      <a href="<?php echo "mailto:".$kayit["mail"]; ?>"><img src="img/email.png"><p><?php echo $kayit["mail"];?></p></a>
   </div>
  </div>
</div>
<?php include"footer.php"; ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9933870-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
