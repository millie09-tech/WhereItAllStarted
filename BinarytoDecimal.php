<?php
$str = '1010'; 
$l=strlen($str); 
echo $str; 
$sum=0; 
For ($j=0;$j<$l;$j++){
$c=substr($str,$j,1); 
	if($c=='1'){
	 $sum=$sum+1*Pow(2,$l-1-$j);	
	}	
}
echo '=' .$sum;






EXPLANATION: 

<?php - Starting of any php code 

$str = "1010"; - $ = the start of the variable, and str = string. What is occurring in this line of php code is the variable “Str”is being given value. The value in this case is 10001000

$l=strlen($str); -  $I is the variable that is going to represent the other characters in the string in a future line. Strlen is echoing how many characters there are in the string ($str). 
ie: $str = 'abcdef';
echo strlen($str); 
This php code would give the answer 6 because there are 6 characters. 
(NOTE: Characters can include blanks as well)

echo $str; -  Showing the variable previously created $str = "10001000"

$sum=0; -  repetition of the commonly used start of variable $.  Sum is being given value which in this case is 0. 

for ($j=0;$j<$l;$j++){  -
$j = 0 (another variable is introduced into the equation and is given the value 0. 
$j is less than ($l = 8) 
$j ++ (increment 1) 
$c=substr($str,$j,1); - A new variable is defined ($c). C is equal to the substring. The original string is included (1010) and then $j (3) and then 1 (last character) are all included into the substring. 
	if ($c=='1') { 
           
	  $sum=$sum+1*Pow(2,$l-1-$j);	
Then the code assigns powers by alternating the #’s each time shown in the increment. The increment comes into play because it would add one each time to the power causing the result. 
	}	
}
echo '=' .$sum; -Repeat sum again (echo) 
?> -  ending on any php code 

