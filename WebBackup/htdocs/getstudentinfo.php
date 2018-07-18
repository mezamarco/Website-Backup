	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		table{
			margin: 5px; 
		}
		td{
			border: 2px solid black; 
			background-color:#4a0000;
			margin = 0;
			text-align:center;
			font-size:14px;
		}
		#firstRow{
			color:lime;
			font-weight:bold;

		}
		h1{font-weight:bold;
		padding-left:290px;}
	</style>
	
<body style = "	background-color: #999999;">
<h1>Student's Table</h1>

</body>
<?php
// Get a connection for the database
require_once('../mysqli_connect.php');

// Create a query for the database
$query = "SELECT first_name, last_name, email, street, city, state, zip,
phone, birth_date FROM students";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){


echo '<table align="left" 
cellpadding="8">

<tr id = "firstRow"><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Street</b></td>
<td align="left"><b>City</b></td>
<td align="left"><b>State</b></td>
<td align="left"><b>Zip</b></td>
<td align="left"><b>Phone</b></td>
<td align="left"><b>Birth Day</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr style = "color:white"><td align="left">' . 
$row['first_name'] . '</td><td align="left">' . 
$row['last_name'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' . 
$row['street'] . '</td><td align="left">' .
$row['city'] . '</td><td align="left">' . 
$row['state'] . '</td><td align="left">' .
$row['zip'] . '</td><td align="left">' . 
$row['phone'] . '</td><td align="left">' .
$row['birth_date'] . '</td>';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>