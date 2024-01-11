<?php 

	require_once('db_contact.php');

	if ($_POST) {
		$id      = $_POST['id'];
		$fname   = $_POST['fname'];
		$lname   = $_POST['lname'];
		$age     = $_POST['age'];
		$contact = $_POST['contact'];

		$sql = "UPDATE members 
				SET fname = '$fname' , lname = '$lname', age = '$age', contact = '$contact'
				WHERE id = {$id}";

		if ($connected -> query($sql) === TRUE ) {
			echo '<p>Successfully updated</p>';
			echo '<a href="../edit.php?id= '.$id.' "><button type="button">Edit</button></a>';
			echo '<a href="../index.php"><button type="button">Home</button></a>';
		}
		else {
			echo 'Error while updating records.' . $connected -> error;
		}

		$connected -> close();
	}

 ?>