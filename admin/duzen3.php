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
	mysqli_query($db,"update projgel set id='".$gelen."'");
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
   <a href="admin.php?g=p"><li>Projler</li></a>
   <a href="admin.php?g=i"><li>İletişim</li></a>
   <a href="admin.php?g=m"><li>Mesajlar</li></a>
 </ul>
</div>
<?php 
  if(p("dzl")=="Güncelle")
			{
			       $ad=p("u_kad");
			       mysqli_query($db,"update anaproje set isim='".$ad."' where anaprojeid='".$gelen."'");
				   header('Location:admin.php?g=p');
             }
?>
<div id="admin_con">
    <div class="guncelle">
      <form method="post">
        <table>
           <h1>Proje Güncelle</h1>
    	    <tr>
        	   <td>Proje Adı:</td>
               <td><input type="text" name="u_kad"></td>
            </tr>
            <tr><td><input type="submit" value="Güncelle" name="dzl" /></td></tr>
         </table>
      </form>
    </div>
</div>
</body>
</html>
<?php }?>
