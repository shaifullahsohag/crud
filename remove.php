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
	<title>Remove members</title>
</head>
<body>
	<h3>
		Do you really want to remove?
	</h3>
	<form action="php_action/remove.php" method="POST">
		<input type="text" name="id" value="<?php echo $data['id'] ?>">
		<button type="Submit">Save Changes?</button>
		<a href="index.php"><button type="button">Home</button></a>
	</form>
</body>
</html>

<?php
	}
 ?>