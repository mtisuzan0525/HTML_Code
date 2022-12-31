<?php

$valid_user = false;

$user_array = array("Mehedi", "Rahat", "Lutfar", "Nandita");
$email_array = array(

		"Mehedi" => "a@example.com",
		"Rahat"  => "b@example.com",
		"Lutfar" => "c@example.com",
		"Nandita"=> "d@example.com",
);

if(isset($_POST["name"])){
	$name = $_POST["name"];

	foreach($user_array as $username){
		if($name == $username){

			if($email_array[$name]){
				if(isset($_POST["email"])){
					$email = $_POST["email"];
					  if($email_array[$name] == $email){
					  		$valid_user = true;
					  }
				}
			}

		}
	}
	
}


echo $valid_user;


?>
