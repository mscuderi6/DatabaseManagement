<?php
	$firstname ="";
	$lastname ="";
	$emailaddress = "";
	$password = "";
	$streetaddress ="";
	$city ="";
	$state = "";
	$zipcode ="";
	$phonenumber ="";
	$birthdate = "";
	$sex = "";

	$errors = array();

$db = mysqli_connect('localhost:1234', 'root', 'maggie', 'bakery');

	if(isset($_POST['register'])) {
		$firstname = mysqli_real_escape_string($_POST['firstname']);
		$lastname = mysqli_real_escape_string($_POST['lastname']);
		$emailaddress = mysqli_real_escape_string($_POST['emailaddress']);
		$password = mysqli_real_escape_string($_POST['password']);
		$streetaddress = mysqli_real_escape_string($_POST['streetaddress']);
		$city = mysqli_real_escape_string($_POST['city']);
		$state = mysqli_real_escape_string($_POST['state']);
		$zipcode = mysqli_real_escape_string($_POST['zipcode']);
		$phonenumber = mysqli_real_escape_string($_POST['phonenumber']);
		$birthdate = mysqli_real_escape_string($_POST['birthdate']);
		$sex = mysqli_real_escape_string($_POST['sex']);

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
			$sql = "INSERT INTO customer (firstname, lastname , emailaddress , password, streetaddress, city, 		state, zipcode, phonenumber, birthdate, sex) 
					VALUES ('$firstname', '$lastname', '$emailaddress', '$password', '$streetaddress', '$city' , '$state', '$zipcode', '$phonenumber', '$birthdate', '$sex')";
			mysqli_query($db, $sql);


		}
	}
?>
