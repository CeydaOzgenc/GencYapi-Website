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
	mysqli_query($db,"update urungel set urungelen='".$gelen."'");
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
       <td class="oz" width="200px">Ürün-Yazısı</td>
       <td class="oz" width="200px">Ürün-Fotoğraf</td>
       <td class="oz" width="31px">Sil</td>
       <td class="oz">Düzenle</td>
     </tr>
     <?php echo "<meta charset='utf-8'>"; $xxx=mysqli_query($db,"select * from alturun order by urunid");
     $sayi=0;
     while ($kayit=mysqli_fetch_array($xxx)){ 
       if($kayit['urunid']==$gelen){ $sayi+=1;?>
           <tr>
             <td><?php echo $kayit['alturunid'];?></td>
             <td><?php echo $kayit['baslik'];?></td>
              <td><?php echo $kayit['yazi'];?></td>
             <td><img style="width:80px; height:50px; margin-top:5px;" src='<?php echo "../img/urunler/".$kayit['fotograf'] ?>'/></td>
             <td><a href="<?php echo "sildi.php?git=".$kayit['alturunid'];?>"><input type="button" value="Sil"/></a></td>
             <td><a href="<?php echo "duzen2.php?git=".$kayit['alturunid'];?>"><input type="button" value="Düzenle"/></a></td>
          </tr>
	 <?php }}
	      if(p("ek")=="Ekle")
			{
			    header('Location:ekle.php?go=4');
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
