<?php
	if(!$_SESSION)
	{
		echo "<script> alert ('ADMİNE ÖZELDİR!'); </script>";
		header("refresh:0;url=index.php");
	}
	else{
			if(p("btngrs")=="Güncelle")
			{
				$sifre=p("e_sifre");
				$yeni_sifre=p("y_sifre");
				$sql=mysqli_query($db,"select * from giris where sifre='".$sifre."'");
					if(mysqli_num_rows($sql)==0)
					{
						echo "<script> alert ('Hatalı Giriş!'); </script>";
					}
					else
					{
						mysqli_query($db,"update giris set sifre='".$yeni_sifre."'");
						echo "<script> alert ('Güncelleme Tamalandı.'); </script>";
					}
			}
			if(p("btngnc")=="Güncelle")
			{
				$admin=p("e_kad");
				$yeni_admin=p("y_kad");
				$sql=mysqli_query($db,"select * from giris where admin='".$admin."'");
					if(mysqli_num_rows($sql)==0)
					{
						echo "<script> alert ('Hatalı Giriş!'); </script>";
					}
					else
					{
						mysqli_query($db,"update giris set admin='".$yeni_admin."'");
						echo "<script> alert ('Güncelleme Tamalandı.'); </script>";
					}
			}
		?>
<form method="post">
    <div class="guncelle">
    <table>
      <h1>Kullanıcı Adı Güncelle</h1>
    	<tr>
        	<td>Eski Kullanıcı Adı:</td>
            <td><input type="text" name="e_kad"></td>
        </tr>
        <tr>
        	<td>Yeni Kullanıcı Adı:</td>
            <td><input type="text" name="y_kad" ></td>
        </tr>   
        <tr><td><input type="submit" value="Güncelle" name="btngnc" /></td></tr>   
    </table>
    </div>
	<div class="guncelle">
    <table>
      <h1>Şifre Güncelle</h1>
    	<tr>
        	<td>Eski Şifre:</td>
            <td><input type="password" name="e_sifre"></td>
        </tr>
        <tr>
        	<td>Yeni Şifre:</td>
            <td><input type="password" name="y_sifre"></td>
        </tr> 
        <tr><td><input type="submit" value="Güncelle" name="btngrs" /></td></tr>     
    </table>
    </div>
</form>
<?php }?>