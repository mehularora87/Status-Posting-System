<! DOCTYPE = Html>
<!--Search Status Page-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>STATUS POSTING SYSTEM</title>
		<link href="mystyle.css" rel="stylesheet">
		<style>
		form { width: 500px; }
		label { float: left; width: 130px; }
		input[type=text] { float: left; width: 250px; }
		input[type=submit] { float: right;}
		</style>

		
	</head>
	<?php include "head.php" ?>
	<body>
		<div id="home">
		<h1><img src="images/title1.PNG" alt="Level 1 Header" /></h1>
		<form action = "searchstatusprocess.php" method = "get">					<!--using get method to submit form-->
		
			<label for="status" >Status: </label>	<input required type = "Text" name = "status" placeholder= "Enter keywords here"  title = "Enter status you want to search.">
			<input type = "Submit" value = "Search Status" name = "search"><br><br>
			
		</form>
		</div>
	</body>
</html>



