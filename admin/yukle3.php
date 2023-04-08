<?php
	session_start();
	include "ayar.php";
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
	$i=mysqli_query($db,"select * from urungel");
	while($yazdir=mysqli_fetch_array($i))
    {$gel=$yazdir["urungelen"];}
	$x=mysqli_query($db,"select * from alturungel");
	while($oku=mysqli_fetch_array($x))
    {$yaz=$oku["gel"]; echo $yaz;}
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
					     $sil=mysqli_query($db,"select * from urunler where urunid='".$yaz."'");
                         while($bak=mysqli_fetch_array($sil))
                         {unlink("../img/urunler/".$bak["fotograf"]);}
						 mysqli_query($db,"update alturun set fotograf='".$dosyaad."' where alturunid='".$yaz."'");
						 header('Location:git.php?git='.$gel);
						 
					  }
				}
		}
?>
<?php }?>