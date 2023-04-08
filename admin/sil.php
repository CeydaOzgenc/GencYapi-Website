<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>EKOBİM</title>
<link rel="stylesheet"  href="css/reset.css">
<link rel="stylesheet"  href="css/style.css">
</head>
<body>
<?php $db=mysqli_connect("localhost","gencyapi_user","genc42yapi32malzemeleri","gencyapi_1"); $g=$_GET['go']; $s=$_GET['delete']; echo $s;
			    if($g==1){ 
			       mysqli_query($db,"delete from anatablo where id='".$s."'");
                   header('Location:index.php'); 
			    }
			    else{
			       mysqli_query($db,"delete from alttablo where id='".$s."'");
                   header('Location:alt.php?go='.$g); 
			    }
			    
?>
</body>
</html>

