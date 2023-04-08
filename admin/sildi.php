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
 $i=mysqli_query($db,"select * from urungel order by urungelen");
 while ($kayit=mysqli_fetch_array($i)){ $g=$kayit["urungelen"];}
 $sil=mysqli_query($db,"select fotograf from alturun where alturunid='".$gelen."'");
 while($yazdir=mysqli_fetch_array($sil))
 {unlink("../img/urunler/".$yazdir["fotograf"]);}
 mysqli_query($db,"delete from alturun where alturunid='".$gelen."'");
 header('Location:git.php?git='.$g);
	}
?>