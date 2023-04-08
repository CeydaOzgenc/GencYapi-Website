<?php
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;index.php");
	}
	else{
echo "<meta charset='utf-8'>";
$sql=mysqli_query($db,"select adres,mail,tel from ilet");
$kayit=mysqli_fetch_array($sql);
?>
<?php
			if(p("btn")=="Güncelle")
			{
				echo "<meta charset='utf-8'>";
				$adres=p("adres");
				$mail=p("mail");
				$tel=p("tel");
				mysqli_query($db,"update ilet set adres='".$adres."'");
				mysqli_query($db,"update ilet set mail='".$mail."'");
				mysqli_query($db,"update ilet set tel='".$tel."'");
			}
		?>
                      
<form method="post" action="">
<div class="guncelle">
	<table>
    	<tr>
        	<td>Adres:</td>
            <td><textarea name="adres"><?php echo $kayit["adres"] ?></textarea></td>
        </tr>
        <tr>
        	<td>E-Posta</td>
            <td><input type="text" name="mail" value="<?php echo $kayit["mail"] ?>"></td>
        </tr>   
        <tr>
        	<td>Telefon No:</td>
            <td><input type="text" name="tel" value="<?php echo $kayit["tel"] ?>"></td>
        </tr> 
        <tr>
            <td><input type="submit" name="btn" value="Güncelle"></td>
        </tr>      
    </table>
</div>
</form>

</body>
</html>
<?php }?>