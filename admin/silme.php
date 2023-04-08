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
 $i=mysqli_query($db,"select * from gelenler order by anaurungelen");
 while ($kayit=mysqli_fetch_array($i)){ $g=$kayit["anaurungelen"];}
 $sil=mysqli_query($db,"select foto from urunler where urunid='".$gelen."'");
 while($yazdir=mysqli_fetch_array($sil))
 {unlink("../img/urunler/".$yazdir["foto"]);}
 mysqli_query($db,"delete from urunler where urunid='".$gelen."'");
 header('Location:go.php?git='.$g);
	}
?>