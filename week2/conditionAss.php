<html>
<head><title>while loops </title></head>

<body>
<?php  

//creating two variables a and b 
$a = 20;
$b = 40;

if($a > $b){
	echo "The first variable ".$a." is larger than the second variable " .$b ;
}

elseif($a < $b){
	
	echo "The second variable ".$b." is greater than the first variable" .$a ;
} 

elseif($a == $b){
	
	echo "both variables have the same values";
	
} 

else{
	
	echo "Plese input a value";
}



?>

</body>

</html>