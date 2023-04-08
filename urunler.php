<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<meta name="viewport" content-type="width=device-width, initial-scale=1.0">
<META name="author" content="Genç Yapı Malzemeleri `Tasarım Lideri`">
<META name="description" content="Genç Yapı Malzemeleri, Dekorasyon, Kapı, Parke">
<meta name="abstract" content="Genç Yapı Malzemeleri ">
<meta name="keywords" content="genc yapi merkezi, genç yapı merkezi,genç yapı,genc yapi,kapı modelleri, parke, dekorasyon, melamin kapı, pvc kapı, meblan kapı, stone kapı, laminent parke, lamine parke, marküteri parke, iç dekorasyon, villa dekorasyonu, konut dekorasyon, ev dekorasyon, bina dekorasyon,ofis dekorasyon, iş yeri dekorasyon, balçova ,izmir ,izmir balçova">
<meta http-equiv="Copyright" content="Genç Yapı Malzemeleri">
<meta name="googlebot" content="index, follow" />
<meta name="robots" content="index, follow" />
<title>Genç Yapı Zemin|Ürünler|Kapı</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
</head>
<body>
<?php include "admin/ayar.php"; $page=4; $gelen=$_GET['go']; require"navigatiorbar.php";?> 
<div id="banner"> 
  <center><img src="img/productsbanner.jpg"></center>
</div>
<div id="container">
    <?php $x=1; $i=mysqli_query($db,"select * from urunler where anaurunid='".$gelen."' order by urunid ");
     if(mysqli_num_rows($i)>3)
			  { while ($kayit=mysqli_fetch_array($i)){?>
        <a href="<?php echo "urun_alt.php?go=".$kayit["urunid"];?>"><div class="cantainer_top_4"><div class="image_text"><center><?php echo $kayit['baslik'];?></center></div><img src='<?php echo "img/urunler/".$kayit['foto'] ?>'></div></a>
	 <?php }}else {
		 while ($kayit=mysqli_fetch_array($i)){ ?>
        <a href="<?php echo "urun_alt.php?go=".$kayit["urunid"];?>"><div class="cantainer_top"><div class="image_text"><center><?php echo $kayit['baslik'];?></center></div><img src='<?php echo "img/urunler/".$kayit['foto'] ?>'></div></a>          
	 <?php }}?>
</div>
<?php include"footer.php"; ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9933870-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
