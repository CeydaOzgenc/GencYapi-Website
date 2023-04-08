<?php
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}	
	else{ ?>
<div id="mes_con">
<form method="post">
   <table>
     <tr>
       <td class="oz" width="100px">Ana-Ürün-Id</td>
       <td class="oz" width="200px">Ana-Ürün-İsim</td>
       <td class="oz" width="200px">Ana-Ürün-Fotoğraf</td>
       <td class="oz" width="20px">Düzenle</td>
       <td class="oz" width="20px">Göster</td>
     </tr>
     <?php echo "<meta charset='utf-8'>"; $i=mysqli_query($db,"select * from anaurun order by anaurunid ");
     while ($kayit=mysqli_fetch_array($i)){ ?>
        <tr>
       <td><?php echo $kayit['anaurunid'];?></td>
       <td><?php echo $kayit['urunad'];?></td>
       <td><img style="width:80px; height:50px; margin-top:5px;" src='<?php echo "../img/urunler/".$kayit['urunfoto'] ?>'/></td>
       <td><a href="<?php echo "duzen.php?git=".$kayit['anaurunid'];?>"><input type="button" value="Düzenle"/></a></td>
       <td><a href="<?php echo "go.php?git=".$kayit['anaurunid'];?>"><input type="button" value="Göster"/></a></td>
     </tr>
	 <?php }?>
   </table>
</form>  
</div>
<?php }?>