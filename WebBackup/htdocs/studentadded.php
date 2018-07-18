<html>
<head>
<title>Add Student</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
	body{
		background-color: #999999;
		text-align: center;
		/*Center the container*/
		margin: 0 auto;
		padding-bottom: 5px;
	}
	form{
		margin: 45px;
		border: 5px solid black;
		padding: 0px;
		padding-top:10px;
		text-align:center;

		padding-right:auto;
		padding-left:auto;
		background-color:  #4a0000;
		font-weight:bold;


	}
	
	h1{
		text-align:center;

		padding-right:auto;
		padding-left:auto;
	}
	
	#thebutton{
		
		text-align:center;

		padding-right:auto;
		padding-left:auto;
	}
	
	hr{
		border:2px solid black;
	}
	input[type="text"]
	{width:30%;height:2.5%;}
	
	
	b{
		border:5px solid black;
			background-color:#000077;
			padding: 5px;
			color:lime;
			border-radius:15px;


	}
	
</style>


</head>
<body>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['first_name'])){

        // Adds name to array
        $data_missing[] = 'First Name';

    } else {

        // Trim white space from the name and store the name
        $f_name = trim($_POST['first_name']);

    }

    if(empty($_POST['last_name'])){

        // Adds name to array
        $data_missing[] = 'Last Name';

    } else{

        // Trim white space from the name and store the name
        $l_name = trim($_POST['last_name']);

    }

	
	
	   if(empty($_POST['email'])){

        // Adds name to array
        $data_missing[] = 'Email';

    } else{

        // Trim white space from the name and store the name
        $email = trim($_POST['email']);

    }
	   if(empty($_POST['street'])){

        // Adds name to array
        $data_missing[] = 'Street';

    } else{

        // Trim white space from the name and store the name
        $street= trim($_POST['street']);

    }
	   if(empty($_POST['city'])){

        // Adds name to array
        $data_missing[] = 'City';

    } else{

        // Trim white space from the name and store the name
        $city = trim($_POST['city']);

    }
	
	
	
	
	
	
	
 
 
 if(empty($_POST['state'])){

        // Adds name to array
        $data_missing[] = 'State';

    } else{

        // Trim white space from the name and store the name
        $state = trim($_POST['state']);

    }
	
	if(empty($_POST['zip'])){

        // Adds name to array
        $data_missing[] = 'Zip';

    } else{

        // Trim white space from the name and store the name
        $zip = trim($_POST['zip']);

    }
	
	
	
	  if(empty($_POST['phone'])){

        // Adds name to array
        $data_missing[] = 'Phone';

    } else{

        // Trim white space from the name and store the name
        $phone = trim($_POST['phone']);

    }
	
	 if(empty($_POST['birth_date'])){

        // Adds name to array
        $data_missing[] = 'Birth Date';

    } else{

        // Trim white space from the name and store the name
        $birth_date = trim($_POST['birth_date']);

    }
	 
	
 
 
 
 
    
    if(empty($data_missing)){
        
		//We have no missing data, so lets make connection to the database
        require_once('../mysqli_connect.php');
        
        $query = "INSERT INTO students (first_name, last_name,email,street,city,state,zip,phone,birth_date) 
										VALUES (?, ?,?,?,?,?,?,?,?)";
        
		//Prepare a query stement, by placing the database and the query
        $stmt = mysqli_prepare($dbc, $query);
        
        //i Integers
       // d Doubles
       // b Blobs
        //s Everything Else
        
        mysqli_stmt_bind_param($stmt, "sssssssss", $f_name, $l_name, $email, $street,$city, $state,$zip,$phone, $birth_date);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo '<h3 style = "font-weight:bold;">Thank You,<br/>Student Was Entered<hr /></h3>';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'Please try again.<br/>You need to enter the following data:<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>

<form action="http://localhost:8888/studentadded.php" method="post">
    
    <h2><b>Add a New Student</b></h2>
	<br/>
    
   <p>
<input type="text" name="first_name" size="30" value="First Name" />
</p>

<p>
<input type="text" name="last_name" size="30" value="Last Name" />
</p>


<p>
<input type="text" name="email" size="30" value="Email" />
</p>

<p>
<input type="text" name="street" size="30" value="Street" />
</p>

<p>
<input type="text" name="city" size="30" value="City" />
</p>



<p>
<input type="text" name="state" size="30" maxlength = "3" value="State(2 Characters)" />
</p>

<p>
<input type="text" name="zip" size="30"  maxlength = "8" value="Zip" />
</p>


<p>
<input type="text" name="phone" size="30"  value="Phone" />
</p>

<p>
<input type="text" name="birth_date" size="30" value="Birth Day" />
</p>





<p id = "thebutton">
<input type="submit" name="submit" value="Send" />
</p>

    

</form>


<b>What is in our Database : 
<a style = "color:white; font-weight:bold;" href = "getstudentinfo.php" target = "_blank" title = "Get Info">Get Info</a></b>
<br />
<br />
<b>
Delete all the information that is in our Database : 
<a style = "color:white; font-weight:bold;" href = "deletedTheInfo.php" target = "_blank" title = "Delete All Info">Delete All Info</a>




</body>
</html>