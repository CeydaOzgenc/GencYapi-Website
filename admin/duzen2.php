<?php
	session_start();
	include "ayar.php";
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
	$i=mysqli_query($db,"select * from urungel order by urungelen");
	while ($kayit=mysqli_fetch_array($i)){ $gel=$kayit["urungelen"];}
    $gelen=$_GET['git']; 
	mysqli_query($db,"update alturungel set gel='".$gelen."'");?>
    
    
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
			       mysqli_query($db,"update alturun set baslik='".$ad."' where alturunid='".$gelen."'");
				   header('Location:git.php?git='.$gel);
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
      <form method="post" action="yukle3.php" enctype="multipart/form-data">
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