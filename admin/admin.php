<!DOCTYPE html>
<?php
    include "ayar.php";
	session_start();
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
?>
<html>
<head>
<meta charset="utf-8">
<title>Genç Yapı Malzemeleri|Yönetim Paneli</title>
<link rel="stylesheet"  href="../css/reset.css">
<link rel="stylesheet"  href="css/style.css">
</head>
<body>
<div class="admin_nav">
 <ul>
   <a href="admin.php?g=a"><li>Admin Güncelle</li></a>
   <a href="admin.php?g=k"><li>Kurumsal</li></a>
   <a href="admin.php?g=g"><li>Galeri</li></a>
   <a href="admin.php?g=u"><li>Ürünler</li></a>
   <a href="admin.php?g=p"><li>Projeler</li></a>
   <a href="admin.php?g=i"><li>İletişim</li></a>
   <a href="admin.php?g=m"><li>Mesajlar</li></a>
 </ul>
</div>
<div id="admin_con">
   <?php
	  switch(g("g"))
	{
		case "a": include "guncelle.php"; break;	
		case "k": include "kurum.php";break;	
		case "g": include "galeri.php"; break;
		case "p": include "proje.php"; break;
		case "u": include "urun.php"; break;
		case "i": include "ilet.php"; break;
		case "m": include "mesaj.php"; break;
	}
  ?>
</div>
</body>
</html>
<?php }?>
