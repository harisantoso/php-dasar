<?php
require 'functions.php';

$id = $_GET['id'];

$row = query("SELECT * FROM siswa WHERE ID = $id")[0];

if (isset($_POST['save'])) {
  if (edit($_POST) > 0) {
    echo "
      <script>
        alert('data berhasil diubah')
        document.location.href='index.php'
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data berhasil diubah')
        document.location.href='index.php'
      </script>
    ";
  }
}

$kelamin = $row['KELAMIN'];
$agama = $row['AGAMA'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $row["ID"]; ?>">
    <ul>
      <h2>Edti Data Kariawan</h2>
      <li>
        <label for="">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $row['NAMA']; ?>" required placeholder="Nama" autocomplete="off">
      </li>
      <br>
      <li>
        <label for="">Jenis Kelamin : </label>
        <label for="Laki-laki"><input type="radio" name="kelamin" id="Laki-laki" value="Laki-laki" <?= ($kelamin == 'Laki-laki') ? 'checked' : '' ?> required>Laki-laki</label>
        <label for="Perempuan"><input type="radio" name="kelamin" id="Perempuan" value="Perempuan" <?= ($kelamin == 'Perempuan') ? 'checked' : '' ?> required>Perempuan</label>
      </li>
      <br>
      <li>
        <label for="">Agama</label>

        <select for="agama" name="agama" id="agama">
          <option value="ISLAM" <?= ($agama == 'ISLAM') ? 'selected' : ''; ?>>ISLAM</option>
          <option value="KRISTEN" <?= ($agama == 'KRISTEN') ? 'selected' : ''; ?>>KRISTEN</option>
          <option value="KATOLIK" <?= ($agama == 'KATOLIK') ? 'selected' : ''; ?>>KATOLIK</option>
          <option value="HINDU" <?= ($agama == 'HINDU') ? 'selected' : ''; ?>>HINDU</option>
          <option value="BUDHA" <?= ($agama == 'BUDHA') ? 'selected' : ''; ?>>BUDHA</option>
        </select>

      </li>
      <br>
      <li>
        <label for="">Alamat : </label>
        <input type="text" name="alamat" id="alamat" required placeholder="Alamat" value="<?= $row['ALAMAT']; ?>" autocomplete="off">
      </li>
      <br>

      <button type="submit" name="save">SAVE</button>
      <br>
      <br>
      <a href="index.php"><button>Back</button></a>
    </ul>
  </form>

</body>

</html>