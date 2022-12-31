<?php

$user_array = array("Mehedi", "Rahat", "Lutfar", "Nandita");

//echo sizeof($user_array);

for($i = 0; $i < sizeof($user_array); $i++){
	echo $user_array[$i]."<br>";
}


$some_student = array(

	"Name" => "Some Student",
	"SID" => 181472010,
	"CGPA" => 2.75,
	"Address" => "Mirpur",
	"University" => "City University",

);

foreach($some_student as $key => $value){
	echo $key.": ".$value."<br>";
}


$x = 0;
while($x<sizeof($user_array)){
	echo $user_array[$x]."<br>";
	$x++;
}

?>