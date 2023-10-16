<?php
$str1='M';
echo $str1;
$binarr=str_split($str1);
foreach ($binarr as $bin);
$e = ord($bin);
$n = $e ; 
$diff=$n ;
$str='';
for ($j=7;$j>=0;$j--) 
{
    if ($diff>=pow(2,$j)) {
	   $str=$str."1";
       $diff=$diff-pow(2,$j); 
			
	} else {
     $str=$str.'0';
   
    }
}
echo $str;
