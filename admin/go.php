<?php
	session_start();
	include "ayar.php";
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	} 
	else{
    $gelen=g('git');
?>
<html>
<head>
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
      <div id="mes_con">
      <h1> </h1>
<form method="post">
   <table>
     <tr>
       <td class="oz" width="100px">Ürün-Id</td>
       <td class="oz" width="200px">Ürün-İsim</td>
       <td class="oz" width="200px">Ürün-Fotoğraf</td>
       <td class="oz" width="31px">Sil</td>
       <td class="oz">Düzenle</td>
       <td class="oz">Göster</td>
     </tr>
     <?php echo "<meta charset='utf-8'>"; $xxx=mysqli_query($db,"select * from urunler order by anaurunid");
     $sayi=0;
     while ($kayit=mysqli_fetch_array($xxx)){ 
       if($kayit['anaurunid']==$gelen){ $sayi+=1;?>
           <tr>
             <td><?php echo $kayit['urunid'];?></td>
             <td><?php echo $kayit['baslik'];?></td>
             <td><img style="width:80px; height:50px; margin-top:5px;" src='<?php echo "../img/urunler/".$kayit['foto'] ?>'/></td>
             <td><a href="<?php echo "silme.php?git=".$kayit['urunid'];?>"><input type="button" value="Sil"/></a></td>
             <td><a href="<?php echo "duzen1.php?git=".$kayit['urunid'];?>"><input type="button" value="Düzenle"/></a></td>
             <td><a href="<?php echo "git.php?git=".$kayit['urunid'];?>"><input type="button" value="Göster"/></a></td>
          </tr>
	 <?php }}
	      if(@$_POST["ek"]=="Ekle")
			{
			  if($sayi<4){
			    header('Location:ekle.php?go=3&bul='.$gelen);
			  }
			  else{
			    echo "<script> alert ('Ürünler bölümünde en fazla 4 ürün bulunabilir!'); </script>";
			  }
			}
	 ?> 
     <tr>
     <td colspan="5"></td>
     <td><input type="submit" value="Ekle" name="ek" style="margin:5px;"/></td>
     </tr>
   </table>
</form>  
</div>
</div>
</body>
</html>
<?php }?>
