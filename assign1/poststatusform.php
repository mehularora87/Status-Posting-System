<! DOCTYPE = Html>
<!--Post Status Page-->
<html>
	<head>
		<meta charset = "utf-8" />
		<title>STATUS POSTING SYSTEM</title>
		<link href="mystyle.css" rel="stylesheet">		<!--Linking CSS file-->
		<style>											<!--using <style> tag differently from css to style form-->
		form { width: 800px; }
		label { float: left; width: 150px; }
		input[type=text] { float: left; width: 350px; }
		input[type=date] { float: left; width: 150px; }
		</style>

		
	</head>
	<?php include "head.php" ?>				
	<body>
		<div id="home">						
		<h1><img src="images/title1.PNG" alt="Level 1 Header" /></h1>
		<form action = "poststatusprocess.php" method = "post">			<!--using post method to submit form-->
		
			<label for="scode" >Status Code: </label>	
				<input required type = "Text" style="width: 150px;" name = "scode"  pattern = "S.\d{3}" placeholder="ex: S0000,S0001"  title = "Must start with uppercase letter 'S' followed by four digits."><br /><br />
			<label for="status" >Status: </label> 		
				<input required type = "Text"  name = "status" pattern = "[a-zA-Z0-9\,\.\!\?\s]{1,}"  placeholder="alphanumeric , . ! ? allowed" title = "Alphanumeric characters only can include spaces, comma, period(.), exclamation mark (!) and question mark(?)"><br /><br />
			 		
			<label for="share" >Share: </label>					
				<input type="radio" name="share" value="Public"> Public					<!--Radio Button-->
				<input type="radio" name="share" value="Friends"> Friends
				<input type="radio" name="share" value="Only_Me">Only Me<br /><br />
			<?php									/*Using PHP inside HTML*/
			$fdate = date("d/m/y");					// date function to format date to dd/mm/yy format									
													/* Using Html inside PHP */
			echo "<label for='Date' >Date: </label>	
				<input type='text' style='width: 150px;' name='date' pattern='\d{2}\/\d{2}\/\d{2}' value='".$fdate."' title = 'Please enter a valid date in format dd/mm/yy.'><br /><br />" 
			?>
			<label>Permission Type: </label>
				<input type="checkbox" name="pt[]" value="Allow Like"> Allow Like		<!--Check Box-->
				<input type="checkbox" name="pt[]" value="Allow Comment"> Allow Comment
				<input type="checkbox" name="pt[]" value="Allow Share"> Allow Share<br /><br />
				
			<input type = "Submit" value = "Post" name = "save">						<!--Submit Button-->
			<input type = "Reset" value = "Reset"><br />								<!--Reset Buttun-->
			
			</form>
		</div>
	</body>
</html>