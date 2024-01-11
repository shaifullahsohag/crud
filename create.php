<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<fieldset>
		<legend>Add Member</legend>
		<form action="php_action/create.php" method="POST">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>First Name</th>
					<td><input type="text" name="fname" placeholder="First Name"></td>
				</tr>
				<tr>
					<th>Last Name</th>
					<td><input type="text" name="lname" placeholder="Last Name"></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><input type="text" name="age" placeholder="Age"></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td><input type="text" name="contact" placeholder="Contact"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit">Save Changes</button><a href="index.php"><button type="button">Back</button></a></td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>