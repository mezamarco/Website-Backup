<html lang = "html">
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
		background-color:  #4a0000;
		padding-top:5px;
		font-weight:bold;
		text-align:center;
		
		padding-right:auto;
		padding-left:auto;

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
	
	input[type="text"]
	{width:30%;height:2.5%;}
	b{
		border:5px solid black;
			background-color:#000077;
			padding: 5px;
			color:lime;
			border-radius:15px;


	}
	hr{
		border:2px solid black;
	}
	
</style>



</head>

<h3 style = "font-weight:bold;">This is for testing purposes,<br/>DO NOT ENTER REAL INFORMATION<hr /></h1>

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





<p id="thebutton">
<input type="submit" name="submit" value="Send" />
</p>

</form>


<b>What is in our Database : 
<a style = "color:white; font-weight:bold;" href = "getstudentinfo.php" target = "_blank" title = "Get Info">Get Info</a>
</b>
<br />
<br />
<b>
Delete all the information that is in our Database : 
<a style = "color:white; font-weight:bold;" href = "deletedTheInfo.php" target = "_blank" title = "Delete All Info">Delete All Info</a>
</b>



</body>
</html>