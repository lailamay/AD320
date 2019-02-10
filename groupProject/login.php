	/* Group project login page PHP*/

	<?php
			 $username = $_POST["name"]; 
			 $email = $_POST["email"];
			 $password = $_POST["password"];
			 $newusername = $_POST["newname"];
			 $newpassword = $_POST["newpassword"];

			 echo "<h1>Name: " . $name . "</h1>";
			 echo "<h1>Email: " . $email . "</h1>";
			 echo "<h1>Password: " . $password . "</h1>";
			 echo "<h1>Newusername: " . $newname . "</h1>";
			 echo "<h1>Newpassword: " . $newpassword . "</h1>";


	?>