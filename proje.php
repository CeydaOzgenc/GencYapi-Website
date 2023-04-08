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
<title>Genç Yapı Malzeeleri|Projeler|Kapı</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
</head>
<body>
<?php include "admin/ayar.php"; $page=6; require"navigatiorbar.php";?> 
<div id="banner"> 
  <center><img src="img/projectsbanner.jpg"></center>
</div>

    <?php $i=mysqli_query($db,"select * from proje order by projeid ");
    $sayi=mysqli_num_rows($i); $foto[]=$sayi; $baslik[]=$sayi; $logo[]=$sayi; $bol=explode(".",$sayi/4); $bol2=$sayi%4; $x=0;
    while ($kayit=mysqli_fetch_array($i)){ $x++; $foto[$x]=$kayit["foto"];$baslik[$x]=$kayit["baslik"];$logo[$x]=$kayit["logo"];} $k=0; for($y=1;$y<=$bol[0];$y++){ ?>
         <div id="container">
             <?php for($c=0;$c<=3;$c++){ $k++; ?>
                <div class="cantainer_top_proj" style="background:url(<?php echo "img/proje/".$foto["$k"]; ?>); background-size:100% 100%;">
                    <div id="altyazi"><h2><?php echo $baslik["$k"]; ?></h2></div>
                </div>
             <?php } ?>
         </div>
    <?php }?>
    <div id="container">
    <?php  for($z=1;$z<=$bol2;$z++){ $k++; ?>
             <div class="cantainer_top_proj">
                 <div id="altyazi"><h2><?php echo $baslik["$k"]; ?></h2></div>
                 <img src='<?php echo "img/proje/".$foto["$k"]; ?>'>
             </div>
    <?php } ?>
    </div>	 
<div id="footer" style="position:initial;">
  <div id="footer_container">© Copyright 2018 Genç Yapı Zemin Tüm Hakları Saklıdır.</div>
</div>
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
