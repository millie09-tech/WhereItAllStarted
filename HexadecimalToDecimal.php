CODE 
<?php 
$str='6A';
$chararray=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
$numarray=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
$l=strlen($str);
$str1=strrev($str);
$sum=0;
for ($j=0; $j<$l; $j++){
	$c=substr($str1,$j,1);
	if (in_array($c,$chararray)) {
		$k=array_search($c,$chararray);
		if($k>-1){
			$sum=$sum+($k)*pow(16, $j);
		}
	}
}
echo 'Hex-'. $str.'='. 'Decimal-' .$sum;
?>




<?php 
function something($um){
$whole = (int) $um;  // 5
$frac  = $um - $whole;  
echo $frac;// .7
}

echo 'Decimal to hexadecimal <br>';
$inputnumber=764;
$base=16;
$numarray=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'); 
$j=$inputnumber;
$str='';
while ($j>1){
	$k=$j/$base;
	$l=$j%$base;
	$str=$str.$numarray[$l];
	 echo $j.'/16='.$j/16 .' '.' '.'<br>'; 
          echo something($j/16) .'*16='.$j % 16 .' '.'<br>'; 

	$j=$j-($j-$k);
	
	
	
}
echo strrev($str);
$str =strrev($str);
echo '<br>Hexadecimal to Decimal <br>';
$chararray=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
$numarray=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
$l=strlen($str);
$str1=strrev($str);
$sum=0;
for ($j=0; $j<$l; $j++){
	$c=substr($str1,$j,1);
	if (in_array($c,$chararray)) {
		$k=array_search($c,$chararray);
		echo "$c = $k".'<br>';
		if($k>-1){
			$sum=$sum+($k)*pow(16, $j);
			echo "$k*16^$j=".($k)*pow(16, $j)."<br>";
		}
	}
}
echo $sum;

