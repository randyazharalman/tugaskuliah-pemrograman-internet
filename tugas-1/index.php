<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Pemrograman Internet - 1</title>
</head>

<body>
  <form action="" method="post">
    <label for="nama">Masukan Nama Anda: </label>
    <input type="text" name="nama" id="nama">
    <button name="submit" type="submit" id="submit" >Proses</button>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['nama'];

    echo "<h3>Hallo Selamat Datang, ". ucwords($name) . "</h3>";
  }
  ?>

</body>

</html>