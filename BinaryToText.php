<?php 
$str = '01001101'; 
echo $str; 
$binarr=explode(' ', $str); 
$w=''; 
foreach($binarr as $str1){ 
$l=strlen($str1); 
$sum=0; 
for ($j=0;$j<$l;$j++){
$c=substr($str,$j,1); 
	if($c==1){ 
		$sum=$sum+1*pow(2,$l-1-$j); 
	}
}
echo '='  .$sum .''. chr ($sum); 
$w=$w.chr($sum); 
}
echo $w;
