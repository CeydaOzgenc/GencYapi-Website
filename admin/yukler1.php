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
	$i=mysqli_query($db,"select * from projgel order by id");
	while ($kayit=mysqli_fetch_array($i)){ $gelen=$kayit["id"];}
	$x=mysqli_query($db,"select * from proje order by projeid");
	$dosyauzanti=substr($_FILES["dosya"]["name"],-4,4);
	$dosyaad=rand(0,999999).$dosyauzanti;
	$dosyayol="../img/proje/".$dosyaad;
	$dtip=$_FILES["dosya"]["type"];
	if($dtip="image/jpg" or $dtip="image/png" or $dtip="image/gif")
		{
			if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
				$tasi=move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyayol);
				  if($tasi){
					     while ($kisi=mysqli_fetch_array($x)){
							
						 }
						  mysqli_query($db,"update proje set logo='".$dosyaad."' where logo=''");
						  header('Location:ekleme1.php');
					  }
				}
		}
	}	
?>