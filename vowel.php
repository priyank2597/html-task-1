<?php

 // error_reporting(-1);
	// ini_set('display_errors', 'On');
	$count = 0;

 for($i = 65; $i < 91;$i++)
 {
 
 	$arra[$count] = $i;
 	$count++;
 }

   $vowel = [65,69,73,79,85];
   $newcount = 0;

   for ($i=0; $i < 10; $i++) 
   { 
   	 for ($j=0; $j <$i ; $j++) 
   	 { 
   	 	if(in_array($arra[$newcount], $vowel))
   	 	{
   	 		echo chr($arra[$newcount]);
   	 	}
   	 	else
   	 	{
   	 		echo "*";
   	 	}
   	 	if ($newcount != 26)
   	 	{
   	 		$newcount++;
   	 	}
   	 	else
   	 	{
   	 		$newcount = 0;
   	 	}
   	 }
   	echo "<br>";
   }

?>