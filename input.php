<?php
require 'functions.php';

if (isset($_POST['save'])) {
  if (add($_POST) > 0) {
    echo "
      <script>
        alert('data berhasil ditambahkan')
        document.location.href='index.php'
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data berhasil ditambahkan')
        document.location.href='index.php'
      </script>
    ";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
</head>

<body>

  <form action="" method="post">
    <ul>
      <h2>Input Data Kariawan</h2>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" autofocus required placeholder="Nama" autocomplete="off">
      </li>
      <br>
      <li>
        <label for="kelamin">Jenis Kelamin : </label>
        <label for="Laki-laki"><input type="radio" name="kelamin" id="Laki-laki" value="Laki-laki" required>Laki-laki</label>
        <label for="Perempuan"><input type="radio" name="kelamin" id="Perempuan" value="Perempuan" required>Perempuan</label>
      </li>
      <br>
      <li>
        <label for="">Agama</label>
        <select name="agama" id="">
          <option selected>- Select Agama -</option>
          <option>ISLAM</option>
          <option value="KRISTEN">KRISTEN</option>
          <option value="KATOLIK">KATOLIK</option>
          <option value="HINDU">HINDU</option>
          <option value="BUDHA">BUDHA</option>
        </select>
      </li>
      <br>
      <li>
        <label for="">Alamat : </label>
        <input type="text" name="alamat" id="alamat" autofocus required placeholder="Alamat" autocomplete="off">
      </li>
      <br>

      <button type="reset">CLEAR</button>
      <button type="submit" name="save">SAVE</button>
      <br>
      <br>
    </ul>
  </form>
  <ul>
    <a href="index.php"><button>Back</button></a>
  </ul>


</body>

</html>