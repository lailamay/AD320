/* database PHP */

<?php

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE myDB";
		if ($conn->query($sql) === TRUE) {
		    echo "Database created successfully";
		} else {
		    echo "Error creating database: " . $conn->error;
		}

		
		insert into UserName(FirstName, LastName, Email) values ('Bob', 'McHenry', 'bob@gmail.com');
		insert into UserName(FirstName, LastName, Email) values ($newusername, $newemail);


		
		
		UserName(FirstName, LastName, Email) values('Laila', 'Chavez', "laila@gmail.com");
		array("pk" => 2, "name" => "Sanford", "email" => "sanford@gmail.com"),
		array("pk" => 3, "name" => "Mike", "email" => "mike@gmail.com"),
		array("pk" => 4, "name" => "Joe", "email" => "Joe@gmail.com"),
		array("pk" => 5, "name" => "Jack", "email" => "jack@gmail.com"),
		array("pk" => 6, "name" => "Daniel", "email" => "daniel@gmail.com"),
		array("pk" => 7, "name" => "Sara", "email" => "sara@gmail.com"),
		array("pk" => 8, "name" => "Ruth", "email" => "ruth@gmail.com"),
		array("pk" => 9, "name" => "Lucy", "email" => "lucy@gmail.com")
	);
	$conn->close();


?>