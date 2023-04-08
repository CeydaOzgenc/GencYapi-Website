<?php
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{  ?>
<div id="mes_con">
<form method="post">
   <table>
     <tr>
       <td class="oz" width="100px">Ana-Proje-Id</td>
       <td class="oz" width="200px">Ana-Proje-İsim</td>
       <td class="oz" width="20px">Düzenle</td>
       <td class="oz" width="20px">Göster</td>
     </tr>
     <?php echo "<meta charset='utf-8'>"; $i=mysqli_query($db,"select * from anaproje order by anaprojeid ");
     while ($kayit=mysqli_fetch_array($i)){ ?>
        <tr>
       <td><?php echo $kayit['anaprojeid'];?></td>
       <td><?php echo $kayit['isim'];?></td>
       <td><a href="<?php echo "duzen3.php?git=".$kayit['anaprojeid'];?>"><input type="button" value="Düzenle"/></a></td>
       <td><a href="<?php echo "go1.php?git=".$kayit['anaprojeid'];?>"><input type="button" value="Göster"/></a></td>
     </tr>
	 <?php }?>
   </table>
</form>  
</div>
<?php }?>