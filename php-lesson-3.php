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

$id = 181472010;
$cgpa = $some_student["CGPA"];
$quality = "";
if($cgpa >= 3.5){
	$quality = "good";
}else{
	$quality = "moderate";
}
if($id == $raju["ID"]){

?>

<p>
	The name of the student is <?php echo $raju["Name"]; ?>. His ID is <?php echo $raju["ID"]; ?>. His cgpa is <?php echo $raju["CGPA"]; ?>. That means he is a <?php echo $quality; ?> student. He is from <?php echo $raju["Address"]; ?> and he studies in <?php echo $raju["University"]; ?>.
</p>

<?php } ?>

<?php 

if($id == $tamal["ID"]){

 ?>
<p>
	The name of the student is <?php echo $tamal["Name"]; ?>. His ID is <?php echo $tamal["ID"]; ?>. His cgpa is <?php echo $tamal["CGPA"]; ?>. That means he is a <?php echo $quality; ?> student. He is from <?php echo $tamal["Address"]; ?> and he studies in <?php echo $tamal["University"]; ?>.
</p>

<?php } ?>


<?php 

if($id == $some_student["ID"]){

 ?>

<p>
	The name of the student is <?php echo $some_student["Name"]; ?>. His ID is <?php echo $some_student["ID"]; ?>. His cgpa is <?php echo $some_student["CGPA"]; ?>. That means he is a <?php echo $quality; ?>  student. He is from <?php echo $some_student["Address"]; ?> and he studies in <?php echo $some_student["University"]; ?>.
</p>

<?php } ?>
