<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  
//Reverse string order change

function myStrRev($sring){ 
	$string = $sring;
	$string_length = strlen($string);
	$reversed_string = '';
	for($i=($string_length-1); $i>=0; $i--){ 

		 $reversed_string .= $string[$i]; 
	} 
	return $reversed_string; 
}
 print_r("<p style='background:red; font-size:20px; padding:10px;'>Reverse string order change</p>"); 
	$hi = "Hello fhfhj Eduzip";
	echo myStrRev($hi);
	echo "</br>";
//Reverse string order change
 
$string = "vishnue";  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  

//palindrome
echo "<p style='background:red; font-size:20px; padding:10px;'>palindrome</p>";

$a = "malayalam";
$b =  strrev($a);
    $string_reverse = str_split($b);
   // print_r($string_reverse);
   //  exit;
    $palin = '';

    foreach($string_reverse as $value){

        $palin.= $value; 
    }

    print $palin;

    if($a == $palin){

        print "<br>Palindrome";

    } else {

        print "<br>Not Palindrome"; 

    }
//palindrome another way

function check_plaindrome($data) {
    //remove all spaces
    $data = str_replace(' ', '', $data);
    //remove special characters
    $data = preg_replace('/[^A-Za-z0-9\-]/', '', $data);
    //change case to lower
    $data = strtolower($data);

    //reverse the string
    $reverse = strrev($data);

    if ($data == $reverse) {
        echo "<p>It is Palindrome</p>";
    } 
    else {
        echo "</p>Not Palindrome</p>";
    }
    
}
$data = "A man, a plan, a canal, Panama";
check_plaindrome($data);

//Factorial
echo "<p style='background:red; font-size:20px; padding:10px;'>Factorial</p>";
 
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial"; 

//Sum of Digits
echo "<p style='background:red; font-size:20px; padding:10px;'>Sum of Digits</p>";
 
$num = 14597;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "Sum of digits 14597 is $sum"; 

 //Even or Odd
echo "<p style='background:red; font-size:20px; padding:10px;'>Even or Odd</p>";
  
$number=1233456;  
if($number%2==0)  
{  
 echo "$number is Even Number";   
}  
else  
{  
 echo "$number is Odd Number";  
}   
  
  
?> 
</body>
</html>
