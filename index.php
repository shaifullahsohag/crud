<?php 

	require_once('php_action/db_contact.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="manage_members">
		<a href="create.php"><button type="button">Add Member</button></a>
		<table border="1" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Contact</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT * FROM members WHERE active = 1";
					$result = $connected -> query($sql);

					if ($result -> num_rows > 0) {
						while ($row = $result -> fetch_assoc()) {
							echo '<tr>
								 <td>'.$row['fname'].' '.$row['lname'].'</td>
								 <td>'.$row['age'].'</td>
								 <td>'.$row['contact'].'</td>
								 <td>
									<a href="edit.php?id='.$row['id'].'">
									<button type="button">Edit</button>
									</a>
									<a href="remove.php?id='.$row['id'].'">
									<button type="button">Remove</button>
									</a>
								 </td>
							</tr>';
						}
					}
					else {
						echo '<tr><td colspan="5"><center>No Recored Avaliable</center></td></tr>';
					}
				 ?>
			</tbody>
		</table>
	</div> <!-- /End .manage_members -->
	
</body>
</html>