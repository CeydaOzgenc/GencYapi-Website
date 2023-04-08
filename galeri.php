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
<title>Genç Yapı Malzemeleri|Galeri</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
</head>
<body>
<?php $page=3;require"navigatiorbar.php";?>
<div id="container_home">
<?php include "admin/ayar.php"; echo ""; $sql=mysqli_query($db,"select * from galeri order by fotoid ");
   $i=0; $sayi=mysqli_num_rows($sql); $fotolar[]=$sayi;
    ?>
<div class="liza_albums_slider_wrapper">
		<div class="liza_albums_slider_inner">
   <?Php while ($kayit=mysqli_fetch_array($sql)){ $i++; $fotolar[$i]=$kayit["fotograf"];?>           
            <div class="<?php echo"liza_albums_slide liza_js_bg_image liza_albums_slide".$i;?>" data-src="<?php echo "img/galeri/".$kayit["fotograf"]; ?>" data-count="<?php echo $i;?>">
            </div>
   <?php }?>
		</div>
</div>
	<div class="liza_albums_slider_thumbs">
            <?php $s=$sayi/10; $bol=explode(".",$s);  
			if($bol[0]>0){
				for($y=1;$y<=$bol[0];$y++){?>
                 <div class="liza_albums_slider_thumbs_wrapper">
				    <div class="liza_albums_slider_thumbs_inner">
                      <?php for($z=1;$z<=10;$z++){$yer=($bol[0]-1).$z; $yer=(int)$yer; if($z==10){$yer=($bol[0])."0"; $yer=(int)$yer;}?>
						   <div class="<?php echo "liza_albums_thumb liza_albums_thumb".$yer; ?>" data-count="<?php echo $yer; ?>">
					         <img src="<?php echo "img/galeri/".$fotolar[$yer]; ?>"/>
				          </div> 
                      <?php }?>
                    </div>
                 </div>
				<?php }?> 
                <div class="liza_albums_slider_thumbs_wrapper">
				  <div class="liza_albums_slider_thumbs_inner">
				    <?php for($c=1;$c<=$bol[1];$c++){ $yer1=$bol[0].$c; $yer1=(int)$yer1;?>
						<div class="<?php echo "liza_albums_thumb liza_albums_thumb".$yer1; ?>" data-count="<?php echo $yer1; ?>">
					       <img src="<?php echo "img/galeri/".$fotolar[$yer1]; ?>"/>
				        </div>	 
					<?php } ?>
                  </div>
                </div>
			<?php }
			else{ ?>
              <div class="liza_albums_slider_thumbs_wrapper">
				 <div class="liza_albums_slider_thumbs_inner">
				    <?php for($x=1;$x<=$bol[1];$x++){ ?>
						<div class="<?php echo "liza_albums_thumb liza_albums_thumb".$x; ?>" data-count="<?php echo $x; ?>">
					       <img src="<?php echo "img/galeri/".$fotolar[$x]; ?>"/>
				        </div>	 
					<?php } ?>
                 </div>
              </div>
			<?php }?>
		<div class="liza_albums_slider_counter">
			<span class="liza_albums_current_counter">0</span>
			<span>/</span>
			<span class="liza_albums_all_counter">15</span>
            <span style="font-weight:bold;">&nbsp; > </span>
		</div>
	</div>
</div>
	<?php $sayi=mysqli_num_rows($sql); $fotolar[]=$sayi; $baslik[]=$sayi; $logo[]=$sayi; $bol=explode(".",$sayi/4); $bol2=$sayi%4; $x=0;
    while ($kayit=mysqli_fetch_array($sql)){ $x++; $fotolar[$x]=$kayit["fotograf"];} $k=0; for($y=1;$y<=$bol[0];$y++){ ?>
         <div id="container" class="ozel">
             <?php for($c=0;$c<=3;$c++){ $k++; ?>
                <div class="cantainer_top_proj" style="background:url(<?php echo "img/galeri/".$fotolar["$k"]; ?>); background-size:100% 100%;">
                </div>
             <?php } ?>
         </div>
    <?php }?>
    <div id="container" class="ozel">
    <?php  for($z=1;$z<=$bol2;$z++){ $k++; ?>
             <div class="cantainer_top_proj">
                 <img src='<?php echo "img/galeri/".$fotolar["$k"]; ?>'>
             </div>
    <?php } ?>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/cey.js"></script>
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
