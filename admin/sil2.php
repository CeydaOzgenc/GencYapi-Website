<?php
	session_start();
	include "ayar.php";
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	} 
	else{
 $gelen=g('sil');
 $sil=mysqli_query($db,"select fotograf from galeri where fotoid='".$gelen."'");
 while($yazdir=mysqli_fetch_array($sil))
 {unlink("../img/galeri/".$yazdir["fotograf"]);}
 mysqli_query($db,"delete from galeri where fotoid='".$gelen."'");
 header('Location:admin.php?g=g');
	}
?>