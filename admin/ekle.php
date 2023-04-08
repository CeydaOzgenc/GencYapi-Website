<?php
	session_start();
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}else{include "ayar.php";	$gelen=g('go');?>
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
   <a href="admin.php?g=p"><li>Projeler</li></a>
   <a href="admin.php?g=i"><li>İletişim</li></a>
   <a href="admin.php?g=m"><li>Mesajlar</li></a>
 </ul>
</div>
<?php
   if(p("ekle")=="EKLE")
			{
			   if($gelen==1){
				  $baslik=p("baslik");
				  $yazi=p("yazi");
				  echo $baslik."<br>".$yazi;
				  mysqli_query($db,"insert into kurumsal(baslik,yazi) values('$baslik','$yazi')");
				  header('Location:admin.php?g=k');
			   } else if($gelen==3){
			      $bul=g('bul');
				  $baslik=p("baslik");
				  mysqli_query($db,"insert into urunler(anaurunid,baslik) values('$bul','$baslik')");
			      header('Location:go.php?git='.$bul);
			   }
			}
?>
<div id="admin_con">
   <div class="guncelle">
        <?php if($gelen==1){?>
          <table>
            <form method="post">
              <h1>Kurumsala Yazı Ekleme</h1>
              <tr>
        	    <td>Başlık :</td>
                <td><input type="text" name="baslik"></td>
              </tr>
              <tr>
            	<td>Metin:</td>
                <td><textarea name="yazi"></textarea></td>
              </tr>   
              <tr><td><input type="submit" value="EKLE" name="ekle"></td></tr>  
             </form> 
           </table>
         <?php } else if($gelen==2){?>
           <form method="post" action="yukle.php" enctype="multipart/form-data">
             <input type="file" name="dosya"><BR>
             <input style="width:150px;" type="submit" name="btnr" value="Resim Yükle">
           </form>
         <?php } else if($gelen==3){?>
           <h1>Ürün Ekleme</h1>
           <table>
             <form method="post">
    	       <tr>
        	     <td>Ürün İsmimi:</td>
                 <td><input type="text" name="baslik"></td>
                 <td><input style="width:100px; margin-left:5px;" type="submit" name="ekle" value="EKLE"></td>
               </tr> 
             </form>
           </table>
           <table>
             <form method="post" action="yukler.php" enctype="multipart/form-data"> 
               <tr>
                 <td>Ürün Fotoğrafı:</td><td><input type="file" name="dosya"></td>
                 <td><input style="margin-left:5px;"  type="submit" name="btnr" value="Onayla"></td>
               </tr> 
             </form> 
           </table>
         <?php }?>
   </div>
</div>
</body>
</html>
<?php }?>
