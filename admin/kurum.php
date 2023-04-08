<?php
    echo "<meta charset='utf-8'>";
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
       <td class="oz" width="100px">Kurumsal-Id</td>
       <td class="oz" width="200px">Başlık</td>
       <td class="oz" width="700px">Metin</td>
       <td class="oz" width="20px">Sil</td>
     </tr>
     <?php $i=mysqli_query($db,"select * from kurumsal order by kurumid ");
     while ($kayit=mysqli_fetch_array($i)){?>
        <tr>
       <td><?php echo $kayit['kurumid'];?></td>
       <td><?php echo $kayit['baslik'];?></td>
       <td><?php echo $kayit['yazi'];?></td>
       <td><a href="<?php echo "sil1.php?sil=".$kayit['kurumid'];?>"><input type="button" value="X"/></a></td>
     </tr>
	 <?php }?>
     <?php 
	      if(p("ek")=="Ekle")
			{
				
			  if(mysqli_num_rows($i)<3)
			  {
			     header('Location:ekle.php?go=1');
				
			  }
			  else{
			     echo "<script> alert ('Kurumsal bölümde en fazla 3 metin bulunabilir!'); </script>";
			  }
			}
	 ?> 
     <tr>
     <td colspan="3"></td>
     <td><input type="submit" value="Ekle" name="ek"/></td>
     </tr>
   </table>
</form>  
</div>
<?php }?>