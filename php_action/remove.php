<?php 

	require_once('db_contact.php');
	
	if ($_POST) {
		$id = $_POST['id'];

		$sql = "UPDATE members SET active = 2 WHERE id = {$id}";
		if ($connected -> query($sql) === TRUE) {
			echo '<p>Successfully removed.</p>';
			echo '<a href="../index.php"><button type="button">Home</button></a>';
		}
		else {
			echo 'Error updating records: ' . $connected -> error;
		}

		$connected -> close();
	}

 ?>