<?php
if (isset($_POST['bilangan1']) && isset($_POST['bilangan2'])) {
  $bil1 = $_POST['bilangan1'];
  $bil2 = $_POST['bilangan2'];
  echo "Hasil Perkalian " . $bil1 . " x " . $bil2 . " = " . ($bil1 * $bil2);
}

if(isset($_GET['keyword'])){
  $keyword = $_GET['keyword'];
  echo "Hasil Pencarian dengan kata kunci : " . $keyword;
}