<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Genç Yapı Malzemeleri|Yönetim Paneli</title>
<link rel="stylesheet"  href="../css/reset.css">
<link rel="stylesheet"  href="css/style.css">
</head>
	<body>
    	<?php
            session_start();
            include "ayar.php";
			if(p("btngrs")=="GİRİŞ")
			{
				$admin=p("admin");
				$sifre=p("sifre");
				$sql=mysqli_query($db,"select * from giris where admin='".$admin."' and sifre='".$sifre."'");
					if(mysqli_num_rows($sql)==0)
					{
						echo "<script> alert ('Hatalı Giriş!'); </script>";
					}
					else
					{
						$_SESSION["oturumacan"]=$admin;
					 	header("Location:admin.php?g=a");
					}
			}
			
		?>
        <div id="admin_log"> 
        <table>
        <form method="post" action="">
        <tr>
           <td>Admin:</td>
           <td><input name="admin" type="text" /></td>
         </tr>
         <tr>
		  <td>Sifre: </td>
          <td><input name="sifre" type="password" /></td>
         </tr>
         <tr>
          <td colspan="2"><input type="submit" value="GİRİŞ" name="btngrs" /></td>
         </tr>
        </form>
        </table>
        </div>
    </body>
</html>