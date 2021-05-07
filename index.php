<?php

//checking leap year:



$year = 1701;

if (($year%4 == 0 && $year != 0) || ($year% 400 == 0)){
	


	echo "$year is a leap year";


}

else{
	echo "$year is not a leap year";
}


//checking if a character is alphabet, digit or special character:


$character = "0";

if (($character>="a" && $character<="z") || ($character>="A" && $character<="Z")) {

		echo "$character is an alphabet";
}

else if ($character>=0 && $character<=9){ 
		echo "$character is a number";
}
else{
		echo "$character is a special character";
}


//gross salary calculation:

$basic = 10000;

if ($basic<=10000) {
	# code...
	$gross = $basic*2;
 		echo "On basic salary $basic , the gross salary will be $gross";

}
else if ($basic<=20000) {
	# code...
	$gross = $basic*2.15;
 		echo "On basic salary $basic , the gross salary will be $gross";
}
else{
	# code...
	$gross = $basic*2.25;
 		echo "On basic salary $basic , the gross salary will be $gross";

}








?>