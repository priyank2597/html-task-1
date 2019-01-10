<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript">
		

	</script>



</head>
<body>

enter number:
<form action="pattern.php" method="post">
<input type="number" name="no">
<input type="submit" name="submit" value="submit">
</form>

<?php

error_reporting(-1);
	ini_set('display_errors', 'On');

 $n = "";
 $n = $_POST["no"];
 $m = 65;
 $z=0;

 //echo $n;



	// $vowel = range(65, 90);
 	$vowel = array("a"=>"65","e"=>"69","i"=>"73","o"=>"79","u"=>"85");

 for ($i=64; $i <$n+64; $i++) { 
 	for ($j=64; $j <=$i ; $j++) { 
 		
 		if ($m>=91) 
 		{
 			$m=65;
  		}
  		foreach ($vowel as $key => $value)
  		 {
  			if (in_array($value, $vowel))
  			{
 			echo chr($value);
 			//$m++;
 			}
 			else
 			{
 				echo "*";
 			}
  		}
 	}
 	echo "<br>";
 }
?>




<br>

<?php
$n = "";
 $n = $_POST["no"];
 $m = 97;
 $z=0;
 for ($i = 0; $i < $n; $i++) 
 { 

 	for ($j = $n-1; $j >= $i; $j--) 
 	{ 
 		echo "&nbsp";
 	}
 	for ($k =0; $k <=$i ; $k++) 
 	{ 
 		
 		
 		if($i%2==0)
 		{
 			echo "*&nbsp&nbsp";
 		}
 		else
 		{
 			if ($m>=91) 
 			{
 			$m=65;
  			}
 			echo chr($m);
 			echo "&nbsp&nbsp";
 			$m++;;
 		}
 	}
 	$z+=1;
 	echo "<br>";
 	
 }

?>




<?php
$n = "";
 $n = $_POST["no"];
 $m = 97;
 $z=0;
for ($i=0; $i <$n; $i++) 
 { 

 	for ($j=0; $j<=$i; $j++) 
 	{ 
 		echo "&nbsp";
 	}
 	for ($k=$n-1; $k >=$i ; $k--) 
 	{ 
 		
 		
 		if($i%2==0)
 		{
 			echo "*&nbsp&nbsp";
 		}
 		else

 		{
 			if ($m>=91) 
 			{
 			$m=65;
  			}
 			echo chr($m);
 			echo "&nbsp&nbsp";
 			$m++;;
 		}
 	}
 	$z+=1;
 	echo "<br>";

 }
 ?>














</body>
</html>