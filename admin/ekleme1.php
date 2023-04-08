<?php
	session_start();
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
	include "ayar.php";
	$i=mysqli_query($db,"select * from projgel order by id");
	while ($kayit=mysqli_fetch_array($i)){ $gelen=$kayit["id"];}
   if(p("btnek")=="Ekle")
			{
				$baslik=p("baslik");
				mysqli_query($db,"insert into proje(anaprojeid,baslik) values('$gelen','$baslik')");
				header('Location:ekleme1.php');
				
			}
?>
<!DOCTYPE html>
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
   <a href="admin.php?g=p"><li>Projler</li></a>
   <a href="admin.php?g=i"><li>İletişim</li></a>
   <a href="admin.php?g=m"><li>Mesajlar</li></a>
 </ul>
</div>
<div id="admin_con">
   <div class="guncelle">
     <h1>Proje Ekleme</h1>
     <table>
      <form method="post">
    	<tr>
        	<td>Proje İsimi:</td>
            <td><input type="text" name="baslik"></td>
            <td><input style="width:100px; margin-left:5px;" type="submit" name="btnek" value="Ekle"></td>
        </tr> 
        </form>
      </table>
      <table>
        <form method="post" action="yukler1.php" enctype="multipart/form-data"> 
        <tr>
        <td>Proje Logosu:</td><td><input type="file" name="dosya"></td>
        <td><input style="margin-left:5px;"  type="submit" name="btnr" value="Onayla"></td></tr> 
        </form> 
        <form method="post" action="yukler2.php" enctype="multipart/form-data"> 
        <tr>
        <td>Proje Fotoğrafı:</td><td><input type="file" name="dosya"></td>
        <td><input style="margin-left:5px;"  type="submit" name="btnr" value="Onayla"></td></tr> 
        </form> 
     </table> 
   </div>
</div>
</body>
</html>
<?php }?>
