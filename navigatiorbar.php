<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Genç Yapı Malzemeleri</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style2.css">
<body>
<div id="header">
  <div id="header_container">
     <a href="http://gencyapimalzemeleri.com"><img id="logo" src="img/logo.png"></a>
     <div id="bilgi">
        <a href="https://www.facebook.com/gencyapimalzemeleri/?modal=admin_todo_tour" target="_blank"><img src="img/face1.png"></a>
        <a href="https://www.instagram.com/gencyapimalzemeleri/" target="_blank"><img src="img/ins1.png"></a> 
     </div>
  </div>
</div>
<div id="nav">
  <div id="nav_container">
    <ul>
      <li style="width: 8%;" class="<?php if($page==1){echo 'active';}?>"><a href="http://gencyapimalzemeleri.com">ANASAYFA</a></li>
      <li style="width: 9%;" class="<?php if($page==2){echo 'active';}?>"><a href="kurumsal.php">KURUMSAL</a></li>
      <li style="width: 5%;" class="<?php if($page==3){echo 'active';}?>"><a href="galeri.php">GALERİ</a></li>
      <li style="width: 11%;" class="<?php if($page==4){echo 'active';}?>"><a>ÜRÜNLERİMİZ</a>
      <ul>
          <a href="<?php echo 'urunler.php?go=1';?>"><li>KAPI</li></a>
          <a href="<?php echo 'urunler.php?go=2';?>"><li>PARKE</li></a>
          <a href="<?php echo 'urunler.php?go=3';?>"><li>DEKORASYON</li></a>
      </ul>
      </li>
      <li style="width: 11%; margin-right: 0;" class="<?php if($page==6){echo 'active';}?>"><a href="proje.php">PROJELERİMİZ</a>
      </li>
      <li style="float: right; margin-right: 0;" class="<?php if($page==5){echo 'active';}?>"><a href="iletisim.php">İLETİŞİM</a></li>
    </ul>
  </div>
</div>
<div id="mobile_header">
    <a href="http://gencyapimalzemeleri.com"><img id="logo" src="img/logo.png"></a>
    <div id="navbar">
      <ul>
       <a><li id="mobile" class="menu">MENU</li></a>
       <a href="http://gencyapimalzemeleri.com"><li class="menu">Anasayfa</li></a>
       <a href="kurumsal.php"><li class="menu">Kurumsal</li></a>
       <a href="galeri.php"><li class="menu">Galeri</li></a>
       <a><li class="menu" id="u1">Ürünlerimiz
          <a href="urunler.php?go=1"><li class="altmenu">KAPI</li></a>
          <a href="urunler.php?go=2"><li class="altmenu">PARKE</li></a>
          <a href="urunler.php?go=3"><li class="altmenu">DEKORASYON</li></a>
       </li></a>
       <a href="proje.php"><li class="menu">Projelerimiz</li></a>
       <a href="iletisim.php"><li class="menu">İletişim</li></a>
      </ul>
    </div>
</div>
<script type="text/javascript">
var element=document.getElementsByClassName("menu");
var ana=document.getElementById("mobile");
var u1=document.getElementById("u1");
var al=document.getElementsByClassName("altmenu");
var a=1;
var b=1;
ana.onclick=function(){
	  if(a==1){
		    a=0;
		    element.item(1).style.display="block";
	        element.item(2).style.display="block";
	        element.item(3).style.display="block";
	        element.item(4).style.display="block";
	        element.item(5).style.display="block";
	        element.item(6).style.display="block";
		  }
	  else{
		    element.item(1).style.display="none";
	        element.item(2).style.display="none";
	        element.item(3).style.display="none";
	        element.item(4).style.display="none";
	        element.item(5).style.display="none";
	        element.item(6).style.display="none";
			a++;
		  }
	  }
u1.onclick=function(){
	  if(b==1){
		    b=0;
		    al.item(0).style.display="block";
		    al.item(1).style.display="block";
	        al.item(2).style.display="block";
		  }
	  else{
	        al.item(0).style.display="none";
		    al.item(1).style.display="none";
	        al.item(2).style.display="none";
			b++;
	  }
}		 
</script>
</body>
</html>