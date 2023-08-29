<?php
// jika tombol login di klik
if (isset($_POST["submit"])) {
  // jika password dan username benar
  if ($_POST["username"] == "admin" &&  $_POST["password"] == "admin") {
    // masuk ke data kariawan
    header("Location: index.php");
  } else {
    $error = true;
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
</head>

<body>
  <ul>
    <h2>Login</h2>

    <form action="" method="post">
      <li>
        <label for="username">Username: </label>
        <br>
        <input type="text" id="username" name="username" required autocomplete="off">
      </li>
      <br>
      <li>
        <label for="password">Password: </label>
        <br>
        <input type="password" id="password" name="password" required autocomplete="off">
      </li>
      <br>
      <button type="submit" name="submit">Login</button>
    </form>

    <?php if (isset($error)) : ?>
      <p>USERNAME & PASSWORD SALAH!!</p>
    <?php endif; ?>

  </ul>
</body>

</html>