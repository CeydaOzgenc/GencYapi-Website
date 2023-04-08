<?php
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
     ?>
<div id="mes_con">
<form method="post">
   <table>
     <tr>
       <td class="oz" width="100px">Fotoğraf-Id</td>
       <td class="oz" width="200px">Fotoğraf-İsim</td>
       <td class="oz" width="200px">Fotoğraf</td>
       <td class="oz" width="20px">Sil</td>
     </tr>
     <?php echo "<meta charset='utf-8'>"; $i=mysqli_query($db,"select * from galeri order by fotoid ");
     while ($kayit=mysqli_fetch_array($i)){ ?>
        <tr>
       <td><?php echo $kayit['fotoid'];?></td>
       <td><?php echo $kayit['fotograf'];?></td>
       <td><img style="width:80px; height:50px; margin-top:5px;" src='<?php echo "../img/galeri/".$kayit['fotograf'] ?>'/></td>
       <td><a href="<?php echo "sil2.php?sil=".$kayit['fotoid'];?>"><input type="button" value="X"/></a></td>
     </tr>
	 <?php }?>
          <?php 
	      if(p("ek")=="Ekle")
			{
			     header('Location:ekle.php?go=2');			
			}
	 ?> 
     <tr>
     <td colspan="3"></td>
     <td><input type="submit" value="Ekle" name="ek" style="margin:5px;"/></td>
     </tr>
   </table>
</form>  
</div>
<?php }?>