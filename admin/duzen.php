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
	mysqli_query($db,"update gelenler set anaurungelen='".$gelen."'");
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
<?php 
  if(p("dzl")=="Güncelle")
			{
			       $ad=p("u_kad");
			       mysqli_query($db,"update anaurun set urunad='".$ad."' where anaurunid='".$gelen."'");
				   header('Location:admin.php?g=u');
             }
?>
<div id="admin_con">
    <div class="guncelle">
      <form method="post">
        <table>
           <h1>Ürün Güncelle</h1>
    	    <tr>
        	   <td>Ürün Adı:</td>
               <td><input type="text" name="u_kad"></td>
            </tr>
            <tr><td><input type="submit" value="Güncelle" name="dzl" /></td></tr>
         </table>
      </form>
      <form method="post" action="yukleme.php" enctype="multipart/form-data">
        <table style="margin-top:50px;">
            <tr>
        	   <td>Ürün Fotoğrafı:</td>
               <td><input type="file" name="dosya"><BR></td>
            </tr>   
            <tr><td><input type="submit" value="Güncelle"/></td></tr> 
         </table>
      </form>    
    </div>
</div>
</body>
</html>
<?php }?>
