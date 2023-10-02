<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Survey</h1>
  <form action="proses.php">
    Nama<input type="text" name="nama" id="nama"><br>
    Kenal MDP dari :
    <input type="checkbox" name="dari[]" id="dari" value="Instagram">
    Instagram
    <br>
    <input type="checkbox" name="dari[]" id="dari" value="Facebook">
    Facebook
    <br>
    <input type="checkbox" name="dari[]" id="dari" value="Twitter">
    Twitter
    <br>
    <input type="checkbox" name="dari[]" id="dari" value="Tiktok">
    Tiktok
    <br>
    <input type="checkbox" name="dari[]" id="dari" value="YouTube">
    YouTube
    <br>
    <button type="submit" name="simpan">Simpan</button>
  </form>
</body>

</html>