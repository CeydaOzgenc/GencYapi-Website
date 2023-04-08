<?php
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}	
	else{?>
<div id="mes_con">
   <table>
     <tr>
       <td class="oz" width="70px">Mesaj-Id</td>
       <td class="oz" width="200px">Ad-Soyad</td>
       <td class="oz">E-Posta</td>
       <td class="oz" width="200px">Konu</td>
       <td class="oz" width="300px">Mesaj</td>
       <td class="oz" width="20px">Sil</td>
     </tr>
     <?php echo "<meta charset='utf-8'>"; $i=mysqli_query($db,"select * from mesaj order by mid ");
     while ($kayit=mysqli_fetch_array($i)){?>
        <tr>
       <td width="70px"><?php echo $kayit['mid'];?></td>
       <td width="200px" ><?php echo $kayit['ad_sad'];?></td>
       <td><?php echo $kayit['mail'];?></td>
       <td width="200px"><?php echo $kayit['konu'];?></td>
       <td width="300px"><?php echo $kayit['mesaj'];?></td>
       <td width="20px"><a href="<?php echo "sil.php?sil=".$kayit['mid'] ;?>"><input type="submit" value="X"/></a></td>
     </tr>
	 <?php }?>
   </table>
</div>
<?php }?>