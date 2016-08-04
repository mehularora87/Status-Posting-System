<! DOCTYPE = Html>
<!--Post Status Process Page-->

<html>
	<head>
		<meta charset = "utf-8" />
		<title>STATUS POSTING SYSTEM</title>
		<link href="mystyle.css" rel="stylesheet">		<!--Linking CSS file-->
	</head>
	<?php include "head.php" ?>							<!--Using head.php to insert navigation bar-->
	<body>
		<div id="home">
			<h1><img src="images/title1.PNG" alt="Level 1 Header" /></h1>
			<?php

	
			require_once ("settings.php");										// Connecting to settings.php
						
			$con = mysqli_connect($host, $user, $pswd, $dbnm);					// Create connection

						
			if (!$con) 															// Check connection
			{
				die("Cannot connect:  " . mysqli_error());
			}
			mysqli_select_db($con,"kgk7052");
			$query = "SELECT scode FROM status_tb";								// Checking for table if exists
			$result = mysqli_query($con, $query);
		
			if(empty($result)) 													// If table does not exist creating new table
			{	
                $Create = "CREATE TABLE status_tb
						(
                          scode varchar(6) NOT NULL UNIQUE,
                          status varchar(250) NOT NULL,
                          share varchar(20),
                          date DATE NOT NULL,
                          permission varchar(40),
						  PRIMARY KEY(scode)
                        )";
		
                If( mysqli_query($con,$Create))					//Checking if query runs correctly
				{
				echo "<p>Table created</p>";
				}
				else
				{
					echo('Invalid query: ' . mysqli_error($con));
				}
				
				
			}
		
		
		
		
			$stcd = $_POST["scode"];				// Passing values to variables for re-use
			$st = $_POST["status"];
			
			if(!empty($_POST["share"]))				// Checking if user entered any share value or not
				{
				$shr =$_POST["share"];
				}
			else
				{
				$share = NULL;
				}
			
					
			if(!empty($_POST["pt"]))				// Checking if user entered any permission value or not
				{
				$ptp =$_POST["pt"];
				$ptplist="";
				$n = count($ptp);					// Checking for number of items in array
				for ($i=0; $i<$n; $i++)
					{
					$ptplist = $ptplist." ".$ptp[$i].",";
					}
					$ptplist = rtrim ($ptplist, ",");		// triming the last comma
				}
			else
				{
				$ptp = NULL;						// If no value is entered for permission then a NULL value is passed
				}
			
			$dt = $_POST["date"];					
			
			$day = substr($dt, 0,-6);				//pulling day part of the string

			$month = substr($dt, 3,-3);				//pulling month part of the string	

			$year = substr($dt, 6);					//pulling year part of the string
			
			if (checkdate($month,$day,$year) == 1)	// checking for a valid date before storing it in the database
			{

				$dt = date_create_from_format("d/m/y","$dt");			//creating date type variable from string
				$dt = date_format($dt,"Y/m/d");							//converting format for date to YYYY/m/d which is storable in database 
				
				$stc_check = "SELECT scode FROM status_tb WHERE scode LIKE '%".$stcd."%'";	//checking for status code if already exists
				$rowcheck = mysqli_query($con,$stc_check);
				$rows = mysqli_num_rows($rowcheck);
				if($rows > 0)											//Nesting IF,Else to check uniqueness of Status code before passing values to query for storing data in database
				{
					echo "Error: Please use another status code.<br/>Status code: ".$stcd." is already in use.";
				}
				else
				{
					$sql_Insert= "Insert into status_tb (scode,status,share,date,permission) value ('".$stcd."','".$st."','".$shr."','".$dt."','".$ptplist."')";		//Query to Insert data into database
		
					if(mysqli_query($con,$sql_Insert))				//Runnung query and checking if data inserteed into table
					{
						echo '<script language="javascript">';		//If data inserts correctly, javascript alert is genereated on page confirming the status recording
						echo 'alert("Status Recorded")';
						echo '</script>';
					}
					else
					{
						echo "Please try again";
					}
		
				}
			}
			else
			{
				echo "Error: Please use a valid date in format 'dd/mm/yy'.<br />";		//If valid date is not found Error message is generated
			}
			mysqli_close($con);			//Closing connection to server
		
			?>
		<br /><br />
		</div>
	</body>
</html>