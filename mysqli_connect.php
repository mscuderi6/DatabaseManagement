<?php
	$firstname
	$lastname
	$emailaddress = "";
	$password = "";
	$streetaddress
	$city
	$state
	$zipcode
	$phonenumber
	$birthdate
	$sex

	$errors = $array();

$db = mysqli_connect('localhost:1234', 'root', 'maggie', 'bakery');
OR dies('Could not connect to mySQL: ' .
	mysqli_connect_error());

	if(isset($_POST['customer'])) {
		$firstname = mysql_real_escape_string($_POST['firstname']);
		$lastname = mysql_real_escape_string($_POST['lastname']);
		$emailaddress = mysql_real_escape_string($_POST['emailaddress']);
		$password = mysql_real_escape_string($_POST['password']);
		$streetaddress = mysql_real_escape_string($_POST['streetaddress']);
		$city = mysql_real_escape_string($_POST['city']);
		$state = mysql_real_escape_string($_POST['state']);
		$zipcode = mysql_real_escape_string($_POST['zipcode']);
		$phonenumber = mysql_real_escape_string($_POST['phonenumber']);
		$birthdate = mysql_real_escape_string($_POST['birthdate']);
		$sex = mysql_real_escape_string($_POST['sex']);

		if(empty($firstname)) {
			array_push($errors, "First Name is required");
			}
		if(empty($lastname)) {
			array_push($errors, ":Last Name is required");
			}			
		if(empty($emailaddress)) {
			array_push($errors, "Email Address is required");
			}			
		if(empty($password)) {
			array_push($errors, "Password is required");
			}			
		if(empty($streetaddress)) {
			array_push($errors, "Street Address is required");
			}			
		if(empty($city)) {
			array_push($errors, "City is required");
			}			
		if(empty($state)) {
			array_push($errors, "State is required");
			}			
		if(empty($zipcode)) {
			array_push($errors, "Zipcode is required");
			}			
		if(empty($phonenumber)) {
			array_push($errors, "Phone Number is required");
			}			
		if(empty($birthdate)) {
			array_push($errors, "Birth Date is required");
			}		
		if(empty($sex)) {
			array_push($errors, "Select Male or Female");
			}

		if (count($errors) == 0) {
			$sql = "INSERT INTO customer (firstname, lastname , emailaddress , password, streetaddress, city, state, zipcode, phonenumber, birthdate, sex) VALUES ('$firstname', '$lastname', '$emailaddress', '$password', '$streetaddress', '$city' , '$state', '$zipcode', '$phonenumber', '$birthdate', '$sex')";

			mysql_query($db, $sql);


		}
	}
?>
