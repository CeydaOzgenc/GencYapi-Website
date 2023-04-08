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
<title>Genç Yapi Malzemeleri</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
<link rel="stylesheet"  href="css/cey.css">
</head>
<body>
<?php $page=4; require"navigatiorbar.php"; $gelen=$_GET['go']; ?>
<div id="container">
<section class="photobooth_grid_gallery">
		<div class="col col-12">
				<div class="photobooth_grid_gallery_element">
					<div class="photobooth_isotope">
						<div class="grid">
<?php include "admin/ayar.php"; echo "<meta charset='utf-8'>"; $sql=mysqli_query($db,"select * from alturun where urunid='".$gelen."' order by alturunid ");
   while ($kayit=mysqli_fetch_array($sql)){?>   
                           <div class="grid-item grid-item--width2">
								<a href="<?php echo "img/urunler/".$kayit["fotograf"]; ?>" class="swipebox">
									<div class="photobooth_grayscale_img">	
										<img src="<?php echo "img/urunler/".$kayit["fotograf"]; ?>" alt="">
										<h2 style="background:#800000;color:#fff;"><?php echo $kayit["baslik"]; ?></h2>
									</div>
								</a>				
							</div>
   <?php } ?>	
						</div>
						
					</div>
				</div>			
		</div>
</section>	
</div>
<div id="footer" style="position:initial;">
  <div id="footer_container">© Copyright 2018 Genç Yapı Zemin Tüm Hakları Saklıdır.</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isostyle="position:initial;"tope.pkgd.min.js"></script>	
<script src="js/jquery.swipebox.js"></script>
<script src="js/index.js"></script>
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