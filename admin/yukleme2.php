<?php
	session_start();
	include "ayar.php";
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
	$i=mysqli_query($db,"select * from projgel");
	while($yazdir=mysqli_fetch_array($i))
    {$gel=$yazdir["id"];}
	$x=mysqli_query($db,"select * from altproj");
	while($oku=mysqli_fetch_array($x))
    {$yaz=$oku["id"]; echo $yaz;}
?>
<?php
	echo "<meta charset='utf-8'>";
	include "ayar.php";
	$dosyauzanti=substr($_FILES["dosya"]["name"],-4,4);
	$dosyaad=rand(0,999999).$dosyauzanti;
	$dosyayol="../img/proje/".$dosyaad;
	$dtip=$_FILES["dosya"]["type"];
	if($dtip="image/jpg" or $dtip="image/png" or $dtip="image/gif")
		{
			if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
				$tasi=move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyayol);
				  if($tasi){
					     $sil=mysqli_query($db,"select * from proje where projeid='".$yaz."'");
                         while($bak=mysqli_fetch_array($sil))
                         {unlink("../img/proje/".$bak["foto"]);}
						 mysqli_query($db,"update proje set foto='".$dosyaad."' where projeid='".$yaz."'");
						 header('Location:go1.php?git='.$gel);
						 
					  }
				}
		}
	}
?>