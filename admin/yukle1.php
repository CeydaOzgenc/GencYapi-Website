<?php
	session_start();
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
?>
<?php
	echo "<meta charset='utf-8'>";
	include "ayar.php";
	$i=mysqli_query($db,"select * from urungel order by urungelen");
	while ($kayit=mysqli_fetch_array($i)){ $gelen=$kayit["urungelen"];}
	$x=mysqli_query($db,"select * from alturun order by alturunid");
	$dosyauzanti=substr($_FILES["dosya"]["name"],-4,4);
	$dosyaad=rand(0,999999).$dosyauzanti;
	$dosyayol="../img/urunler/".$dosyaad;
	$dtip=$_FILES["dosya"]["type"];
	if($dtip="image/jpg" or $dtip="image/png" or $dtip="image/gif")
		{
			if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
				$tasi=move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyayol);
				  if($tasi){
					     while ($kisi=mysqli_fetch_array($x)){
							
						 }
						  mysqli_query($db,"update alturun set fotograf='".$dosyaad."' where fotograf=''");
						  header('Location:git.php?git='.$gelen);
					  }
				}
		}
	}
?>