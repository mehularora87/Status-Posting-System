<!Doctype html>

<html>
	<head>
		<title>About</title>
		<link href="mystyle.css" rel="stylesheet">
	</head>
	<?php include "head.php" ?>
	<body>
		<div id="home">
		<h1><img src="images/about.PNG" alt="Level 1 Header" /></h1>

		<h4>What special features have you done, or attempted, in creating the site that we should know about?</h4>
		<ul>
			<li>A navigation bar is used to navigate through pages. Navigation bar is applied through 'head.php' file.</li>
			<li>'CSS' is used to imply the design of navigation bar as well as for all other pages.</li>
			<li>Regex is applied using 'Pattern' attribute in input tag to limit user to enter only valid data.</li> 
			<li>Nested 'If,Esle' is used to check uniqueness of Status code and to check for 'Date' to be a valid date.</li>
			<li>To better assist users with the input scroll over details and proper error messages are inserted.</li>
			<li>'Placeholder' is used to give example about the input and to give information about the valid input.</li>
			<li>Used a javascript alert to give message about status recorded in database.</li>
		</ul>

		<h4>Which parts did you have trouble with?</h4>

		<p>This assignment is a very creative way to understand basic PHP, Sql and Html. However, I got stuck at times with some issues like:</p>
		<ul>
			<li>How to format date using date input type and then I used text input box instead.</li>
			<li>Then came the issue that how to limit the pattern for a valid date but this was solved by learning about an inbuilt function 'checkdate()'.</li>
			<li>Searching for multiple match and displaying all results was a bit tricky.</li>
		</ul>
		<p>but in the end it was a very good learning experience.</p>
		
		
		<h4>What would you like to do better next time?</h4>
		<ul>
			<li>Next time I would like to use a login page to enhance security by restricting only authorised users to enter the website. Login page will consist of 'Sign Up' and 'Sign In' options.</li>
		</ul>
 

		<h4>References/Sources:</h4>
		
		<ul>
			<li>Lecture Slides.</li>
			<li>Book --> The Complete Reference: PHP; by 'Steven Holzner'.</li>
			<li><a href="http://www.w3schools.com">w3schools.com</a></li>
			<li><a href="http://stackoverflow.com/">stackoverflow.com</a></li>
			
		</ul>

		<h4>Learning Outcomes:</h4>
		<ul>
			<li>Using of Regex.</li>
			<li>Learned various PHP inbuilt functions.</li>
			<li>Using setings.php.</li>
			<li>Connceting database with php.</li>
			<li>Learned alot about PHP, HTML, CSS and SQL</li>
		</ul>
		</div>
	</body>
</html>