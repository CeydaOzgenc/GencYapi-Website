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
 $i=mysqli_query($db,"select * from projgel order by id");
 while ($kayit=mysqli_fetch_array($i)){ $g=$kayit["id"];}
 $sil=mysqli_query($db,"select foto from proje where projeid='".$gelen."'");
 while($yazdir=mysqli_fetch_array($sil))
 {unlink("../img/proje/".$yazdir["foto"]); unlink("../img/proje/".$yazdir["logo"]);}
 mysqli_query($db,"delete from proje where projeid='".$gelen."'");
 header('Location:go1.php?git='.$g);
	}
?>