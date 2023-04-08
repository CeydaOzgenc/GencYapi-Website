<?php include "admin/ayar.php"; ?>
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
<title>Genç Yapı Zemin|Kurumsal</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
</head>
<body>
<?php $page=2;require"navigatiorbar.php";?>
 <div id="banner"> 
  <center><img src="img/institutionalbanner.jpg"></center>
 </div>
<div id="container">
 <?php  echo ""; $i=mysqli_query($db,"select * from kurumsal order by kurumid ");
  if(mysqli_num_rows($i)==1)
			  {
			     while ($kayit=mysqli_fetch_array($i)){?>
                            <h1><?php echo $kayit['baslik'];?></h1>
                            <p class="yaz"><?php echo $kayit['yazi'];?></p>
					 <?php }
				
			  }
  elseif(mysqli_num_rows($i)==2){
	     while ($kayit=mysqli_fetch_array($i)){?>
                             <div class="bolum">
                                <h1><?php echo $kayit['baslik'];?></h1>
                                <p class="yaz"><?php echo $kayit['yazi'];?></p>
                             </div>
					 <?php }
	  }
  else{
	    while ($kayit=mysqli_fetch_array($i)){?>
                            <div class="cantainer_top">
                               <h1><?php echo $kayit['baslik'];?></h1>
                               <p class="yaz"><?php echo $kayit['yazi'];?></p>
                            </div>
					 <?php }
	  }?>
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
