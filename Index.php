<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="postnget.php" method="get">
    <fieldset>
      <legend>Form Data Diri</legend>
      <label for="Nama">Nama:</label>
      <input type="text" id="Nama" name="Nama">
      
      <label for="Alamat">Alamat:</label>
      <input type="text" id="Alamat" name="Alamat">
      
      <label for="TanggalLahir">Tanggal lahir</label>
      <input type="date" id="TanggalLahir" name="TanggalLahir">

      <input type="Submit" value="Submit" id="Button">
    </fieldset>
  </form>
  <script src="./script.js"></script>
</body>
</html>