<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">

<meta name="viewport" content-type="width=device-width, initial-scale=1.0">
<META name="author" content="Genç Yapı Malzemeleri `Tasarım Lideri`">
<META name="description" content="Genç Yapı Malzemeleri, Dekorasyon, Kapı, Parke">
<meta name="abstract" content="Genç Yapı Malzemeleri ">
<meta name="keywords" content="genc yapi merkezi, genç yapı merkezi,genç yapı,genc yapi,kapı modelleri, parke, dekorasyon, melamin kapı, pvc kapı, meblan kapı, stone kapı, laminent parke, lamine parke, marküteri parke, iç dekorasyon, villa dekorasyonu, konut dekorasyon, ev dekorasyon, bina dekorasyon,ofis dekorasyon, iş yeri dekorasyon, balçova ,izmir ,izmir balçova">
<meta http-equiv="Copyright" content="Genç Yapı Malzemeleri">
<meta name="googlebot" content="index, follow" />
<meta name="robots" content="index, follow" />
<title>Genç Yapı Malzemeleri</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
</head>
<body>
<?php $page=1; include"navigatiorbar.php";?>
<div id="container_home">
  <ul>
    <?php include "admin/ayar.php"; $i=mysqli_query($db,"select * from anaurun order by anaurunid ");
     while ($kayit=mysqli_fetch_array($i)){ ?>
         <a href="<?php echo 'urunler.php?go='.$kayit["anaurunid"];?>"><li><div class="img-text"><?php echo $kayit['urunad'];?></div><img class="image" src="<?php echo "img/urunler/".$kayit['urunfoto'] ?>"></li></a>
	 <?php }?>
  </ul>
</div>
    <?php $i=mysqli_query($db,"select * from anaurun order by anaurunid "); while ($kayitim=mysqli_fetch_array($i)){ ?>
         <div id="container" class="ozel">
             <a href="<?php echo 'urunler.php?go='.$kayitim["anaurunid"];?>" ><div class="cantainer_top_proj" style="background:url(<?php echo "img/urunler/".$kayitim['urunfoto']; ?>); background-size:100% 100%;">
                 <div id="altyazi"><h2><?php echo $kayitim['urunad'];?></h2></div>
             </div></a>
         </div>	
	 <?php }?>

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
