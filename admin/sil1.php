<?php
if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
 include "ayar.php";
 $gelen=g('sil');
 mysqli_query($db,"delete from kurumsal where kurumid='".$gelen."'");
 header('Location:admin.php?g=k');
	}
?>