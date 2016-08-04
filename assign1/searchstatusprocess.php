<! DOCTYPE = Html>
<!--Search Status Process Page-->

<html>
	<head>
		<title>STATUS POSTING SYSTEM</title>
		<link href="mystyle.css" rel="stylesheet">
	</head>
	<?php include "head.php" ?>
	<body>
		<div id="home">
			<h1><img src="images/info.PNG" alt="Level 1 Header" /></h1>
			<?php

	
			require_once ("settings.php");										// Connecting to settings.php
						
			$con = mysqli_connect($host, $user, $pswd, $dbnm);					// Create connection

						
			if (!$con) 															// Check connection
			{
				die("Cannot connect:  " . mysqli_error());
			}
			mysqli_select_db($con,"kgk7052");									//Selecting database
			
			$status = $_GET["status"];
	
			
			$sql_search = "SELECT * FROM status_tb WHERE status LIKE '%" . $status . "%' OR scode LIKE '%" . $status . "%'";			//Query to search the keyword
			$result = mysqli_query($con,$sql_search);																					//Executing query
			$ans = mysqli_fetch_array($result);
			If (empty($ans))					//Checking if search produces any results
			{
				echo "No match found. Please try another keyword.";
			}
			else
			{
			
			while($ans)							//Printing all results using while loop
				{
					
					echo "<b>Status: </b>".$ans[1]."<br />";
					echo "<b>Status Code: </b>".$ans[0]."<br /><br /><br />";
				
				
					echo "<b>Share: </b>".$ans[2]."<br />";
					$temp = $ans[3];
					$temp = date_create("$temp");									// Converting string to date format
					$temp = date_format($temp,"F d,Y");								
					echo "<b>Date Posted: </b>".$temp."<br />";
					echo "<b>Permission: </b>".$ans[4]."<br /><br /><br />";
					echo "<hr />";
					$ans = mysqli_fetch_array($result);
				}
			}
			mysqli_close($con);													//Closing connection to server
			
			?>
		
		</div>
	</body>
</html>	