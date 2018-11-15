<html>
<head>
<title>Add New Customer</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['firstName'])){

        // Adds name to array
        $data_missing[] = 'First Name';

    } else {

        // Trim white space from the name and store the name
        $f_name = trim($_POST['firstName']);
    }

    if(empty($_POST['lastName'])){

        // Adds name to array
        $data_missing[] = 'Last Name';

    } else{

        // Trim white space from the name and store the name
        $l_name = trim($_POST['lastName']);

    }

    if(empty($_POST['email'])){
        // Adds name to array
        $data_missing[] = 'Email';

    } else {

        // Trim white space from the name and store the name
        $email = trim($_POST['email']);

    }

    if(empty($_POST['street'])){
        // Adds name to array
        $data_missing[] = 'Street';

    } else {

        // Trim white space from the name and store the name
        $street = trim($_POST['street']);

    }

    if(empty($_POST['city'])){
        // Adds name to array
        $data_missing[] = 'City';

    } else {

        // Trim white space from the name and store the name
        $city = trim($_POST['city']);

    }

    if(empty($_POST['state']){
        // Adds name to array
        $data_missing[] = 'State';

    } else {

        // Trim white space from the name and store the name
        $state = trim($_POST['state']);

    }

    if(empty($_POST['zipCode'])){
        // Adds name to array
        $data_missing[] = 'Zip Code';

    } else {

        // Trim white space from the name and store the name
        $zipCode = trim($_POST['zipCode']);

    }

    if(empty($_POST['phoneNumber'])){

        // Adds name to array
        $data_missing[] = 'Phone Number';

    } else {

        // Trim white space from the name and store the name
        $phone = trim($_POST['phonNumber']);

    }

    if(empty($_POST['birthDate'])){

        // Adds name to array
        $data_missing[] = 'Birth Date';

    } else {

        // Trim white space from the name and store the name
        $b_date = trim($_POST['birthDate']);

    }

    if(empty($data_missing)){
        
        require_once('../mysqli_connect.php');   ←-------------------assumes in xampp, not htdocs
        
        $query = "INSERT INTO student (firstName, lastName, emailAddress,
        street, city, state, zip, phoneNumber, birthDate,
        customerID) VALUES (?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NULL)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
    
        
        mysqli_stmt_bind_param($stmt, "ssssssisssd", $fname,
                               $lname, $emailAdd, $street, $city,
                               $state, $zip, $phone, $bDate,
                                $lunch);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Customer Entered';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>

<form action="http://localhost/customerAdded.php" method="post"
    
    <b>Add a New Customer</b>
    
    <p>First Name:
<input type="text" name="firstName" size="30" value="" />
</p>

<p>Last Name:
<input type="text" name="lastName" size="30" value="" />
</p>

<p>Email Address:
<input type="text" name="emailAddress" size="30" value="" />
</p>

<p>Street:
<input type="text" name="street" size="30" value="" />
</p>

<p>City:
<input type="text" name="city" size="30" value="" />
</p>

<p>State (2 Characters):
<input type="text" name="state" size="30" maxlength="2" value="" />
</p>

<p>Zip Code:
<input type="text" name="zipcode" size="30" maxlength="5" value="" />
</p>

<p>Phone Number:
<input type="text" name="phoneNumber" size="30" value="" />
</p>

<p>Birth Date (YYYY-MM-DD):
<input type="text" name="birthDate" size="30" value="" />
</p>

<p>
    <input type="submit" name="submit" value="Send" />
</p>
    
</form>
</body>
</html>

