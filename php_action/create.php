<?php 
	
	require_once('db_contact.php');

	if ($_POST) {
		$fname   = $_POST['fname'];
		$lname   = $_POST['lname'];
		$age     = $_POST['age'];
		$contact = $_POST['contact'];

		$sql = "INSERT INTO members (fname, lname, age, contact, active) 
				VALUES('$fname', '$lname', '$age', '$contact', 1)";

		if ($connected->query($sql) === TRUE) {
			echo '<p>New record created successfully.</p>';
			echo '<a href="../create.php"><button type="button">Back</button></a>';
			echo '<a href="../index.php"><button type="button">Home</button></a>';
		}
		else {
			echo 'Error' . $sql . ' ' . $connected->connect_error;
		}

		$connected -> close();
	}

 ?>