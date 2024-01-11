<?php 

	require_once('php_action/db_contact.php');
	
	if ($_GET['id']) {
		$id = $_GET['id'];

		$sql = "SELECT * FROM members WHERE id = {$id}";
		$result = $connected -> query($sql);

		$data = $result -> fetch_assoc();

		$connected -> close();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Members</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<fieldset>
		<legend>Edit Member</legend>
		<form action="php_action/update.php" method="POST">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>First Name</th>
					<td><input type="text" name="fname" value="<?php echo $data['fname'] ?>"></td>
				</tr>
				<tr>
					<th>Last Name</th>
					<td><input type="text" name="lname" value="<?php echo $data['lname'] ?>"></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><input type="text" name="age" value="<?php echo $data['age']; ?>"></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td><input type="text" name="contact" value="<?php echo $data['contact']; ?>"></td>
				</tr>
				<tr>
					<input type="text" name="id" value="<?php echo $data['id'] ?>">
					<td></td>
					<td><button type="submit">Save Changes</button><a href="index.php"><button type="button">Back</button></a></td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>

	<?php
	}
 ?>