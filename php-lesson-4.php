<?php

$an_array = array("itme 1", "item 2", "item 3", 5 , 10, 11.2);

echo $an_array[5];

// print_r($an_array);

$an_array[1] = "new value";
unset($an_array[3]);
array_push($an_array, "something");
print_r($an_array);

echo "<p>".$an_array[0]. $an_array[1]."</p>";


$raju = array(

	"Name" => "Foyjul Islam Raju",
	"ID" => 181472094,
	"CGPA" => 3.87,
	"Address" => "Sylhet",
	"University" => "City University",

);


$tamal = array(

	"Name" => "Tamal Majumdar",
	"ID" => 181472039,
	"CGPA" => 3.71,
	"Address" => "Jhalokathi",
	"University" => "City University",

);

$some_student = array(

	"Name" => "Some Student",
	"ID" => 181472010,
	"CGPA" => 2.75,
	"Address" => "Mirpur",
	"University" => "City University",

);


echo "<br>";

?>

<?php 

//Focus is on ID

$id = 181472094;


$student = array();

if($id == $raju['ID']){
	$student = $raju;
}elseif($id == $tamal['ID']){
	$student = $tamal;
}else{
	$student = $some_student;
}
$cgpa = $student["CGPA"];
$quality = "";
if($cgpa >= 3.5){
	$quality = "good";
}else{
	$quality = "moderate";
}

?>

<p>
	The name of the student is <?php echo $student["Name"]; ?>. His ID is <?php echo $student["ID"]; ?>. His cgpa is <?php echo $student["CGPA"]; ?>. That means he is a <?php echo $quality; ?> student. He is from <?php echo $student["Address"]; ?> and he studies in <?php echo $student["University"]; ?>.
</p>




