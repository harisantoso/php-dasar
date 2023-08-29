<?php

require "functions.php";
$kariawan = query("SELECT * FROM siswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Show Data</title>
</head>
<h2>Data Kariawan</h2>

<body>
	<a href="input.php"><button>ADD DATA</button></a>
	<br>
	<br>
	<table border="2" cellpadding="5" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>KELAMIN</th>
			<th>AGAMA</th>
			<th>ALAMAT</th>
			<th>ACTION</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach ($kariawan as $row) : ?>


			<tr>
				<td><?= $i; ?></td>
				<td><?= $row['NAMA']; ?></td>
				<td><?= $row['KELAMIN']; ?></td>
				<td><?= $row['AGAMA']; ?></td>
				<td><?= $row['ALAMAT']; ?></td>
				<td>
					<a href="edit.php?id=<?= $row['ID']; ?>"><button>EDIT</button></a>
					<a href="delete.php?id=<?= $row['ID']; ?>"><BUtton>DELETE</BUtton></a>
				</td>
			</tr>

			<?php $i++; ?>
		<?php endforeach; ?>
	</table>
	<br>

	<a href="login.php"><button>Logout</button></a>

</body>

</html>