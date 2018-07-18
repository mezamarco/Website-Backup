<html lang = "en">

	<head>
		<meta charset = "UTC-8"/>
		<title>Message Received</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<style>
			body{
			background-color: #999999;
			text-align: center;
		
		}
	
		h1{
			text-align:center;
			padding-right:auto;
			padding-left:auto;
			font-weight:bold;

		}

		hr{
		border:2px solid black;
		}
		
		b{
			border:5px solid black;
			background-color:#003cb3;
			padding: 5px;

		}
		</style>
	
	</head>
	<?php
	
	
	
	if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    
	if(empty($_POST['name'])){

        // Adds name to array
        $data_missing[] = 'Name';

    } else {

        // Trim white space from the name and store the name
        $name = trim($_POST['name']);

    }
	
	

    if(empty($_POST['email'])){

        // Adds name to array
        $data_missing[] = 'Email';

    } else{

        // Trim white space from the name and store the name
        $email = trim($_POST['email']);

    }

	
	
	
	
	 if(empty($_POST['phonenumber'])){

        // Adds name to array
        $data_missing[] = 'Phone Number';

    } else{

        // Trim white space from the name and store the name
        $phonenumber = trim($_POST['phonenumber']);

    }
	
	
	   if(empty($_POST['message'])){

        // Adds name to array
        $data_missing[] = 'Message';

    } else{

        // Trim white space from the name and store the name
        $message= trim($_POST['message']);

    }
	  
	
	
	//We have placed the correct inputs into the correct variables
	
	
	
	
	
	
	
	
	// Get a connection for the database
	require_once('../mysqli_connect.php');
	
	
	// Create a query for the database
	$query = "INSERT INTO message (name,email,phonenumber,message) 
										VALUES (?, ?,?,?)";
        
	//Prepare a query stement, by placing the database and the query
     $stmt = mysqli_prepare($dbc, $query);
	
	  //i Integers
       // d Doubles
       // b Blobs
        //s Everything Else
        
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phonenumber,$message);
        
    mysqli_stmt_execute($stmt);
	
	// Close connection to the database
	mysqli_close($dbc);
		
}
	?>
	
		<body>
		<br/><h1>Message was Receieved<br/>Thank you.</h1>
		<hr/>
		<br />
		<br />
		<br />
	
				<b>
				Go back to Marco Meza's main webpage : 
				<a style = "color:white; font-weight:bold;" href = "personalWebSite.html"  title = "Delete All Info">Marco Meza WebPage</a>
				</b>
	
	</body>
	
	
</html>