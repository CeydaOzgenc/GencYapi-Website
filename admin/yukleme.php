<?php
	session_start();
	include "ayar.php";
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
	$i=mysqli_query($db,"select * from gelenler");
	while($yazdir=mysqli_fetch_array($i))
    {$gel=$yazdir["anaurungelen"];}
?>
<?php
	echo "<meta charset='utf-8'>";
	include "ayar.php";
	$dosyauzanti=substr($_FILES["dosya"]["name"],-4,4);
	$dosyaad=rand(0,999999).$dosyauzanti;
	$dosyayol="../img/urunler/".$dosyaad;
	$dtip=$_FILES["dosya"]["type"];
	if($dtip="image/jpg" or $dtip="image/png" or $dtip="image/gif")
		{
			if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
				$tasi=move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyayol);
				  if($tasi){
					     $sil=mysqli_query($db,"select * from anaurun where anaurunid='".$gel."'");
                         while($bak=mysqli_fetch_array($sil))
                         {unlink("../img/urunler/".$bak["urunfoto"]);}
						 mysqli_query($db,"update anaurun set urunfoto='".$dosyaad."' where anaurunid='".$gel."'");
						 header('Location:admin.php?g=u');
						 
					  }
				}
		}
	}
?>