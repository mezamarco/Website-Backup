<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<title>Delete Info</title>
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
			background-color:#000077;
			padding: 5px;
			color:lime;
			border-radius:15px;

		}
		</style>
		
	</head>
	
	
	

	
	<?php
	
	// Get a connection for the database
	require_once('../mysqli_connect.php');
	
	
	// Create a query for the database
	$query = "DELETE from students";
	// Get a response from the database by sending the connection
	// and the query
	$response = @mysqli_query($dbc, $query);
	
	
	
	// If the query executed properly proceed
	if($response){
		echo "<br/><h1>Deletion was successful</h1>";
	
	}

	// Close connection to the database
	mysqli_close($dbc);
		
	
	?>
	
		<body>
		<h1>Student's Table Has Been Cleared.</h1>
		<hr/>
		<br />
		<br />
		<br />
		<br />
		
		<b>Add a Student into our table : 
			<a style = "color:white; font-weight:bold;" href = "addstudent.php" title = "Add Info">Add Info</a>
			</b>
			<br />
			<br />

			<br />

		
				<b>What is in our Database : 
				<a style = "color:white; font-weight:bold;" href = "getstudentinfo.php" title = "Get Info">Get Info</a>
				</b>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<b>
				Go to Marco Meza's main webpage : 
				<a style = "color:white; font-weight:bold;" href = "personalWebSite.html"  title = "Delete All Info">Marco Meza WebPage</a>
				</b>
	
	</body>
	
	
	
</html>
