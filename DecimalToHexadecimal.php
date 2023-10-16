<?php 
$inputnumber=100;
$base=16;
$numarray=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'); 
$j=$inputnumber;
$str='';
while ($j>1){
	$k=$j/$base;
	$l=$j%$base;
	$str=$str.$numarray[$l];
	$j=$j-($j-$k);
	
}
echo strrev($str);
?>
