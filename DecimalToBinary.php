<?php 
$n = 10 ; 
echo $n.'<br>' ; 
$diff=$n; 
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
?>


CODE 
<?php 
$n=10; 
$j=inputnumber; 
$numarray=array('1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
$str='';
$base=2;
while ($j>0){
$quotient=$n/2;
$remainder=$n%2;
$str=$str.$numarray($l);
$j=$j-$k;
echo strrev($str);
}
?>


EXPLANATION

<?php - starting of all php codes 
$n = 10 ; - gives a variable a value
echo $n.'<br>' ; echoing $n (10) so that is shows up in result. There is also the symbol <br>. <br> represents a break in a line. 
$diff=$n= ; The difference is =n 
$str=''; The string is given a variable
for ($j=7;$j>=0;$j--) j=7, as long as j is greater than equal to 0 decrement by 1 
{
    if ($diff>=pow(2,$j)) { If the difference is greater than equal the power of 2 $j (7)
	   $str=$str."1"; add  a 1 to the string (binary #) 
       $diff=$diff-pow(2,$j); The difference for the next # is the difference difference - 2 to the power of j which changes on every character. 			
	} else {
     $str=$str.'0'; Continue this process until the string is equal to 0. 
   
    }
}
echo $str; Shows the final product (binary  #) string in the result. 
?> ending of all php codes
