<!-- Nama: Firlisa Anggraeni
NIM: 1301184103
Kelas: IF-42-11 -->
<?php
include "koneksi.php";

$image = $_FILES['image']['name'];
$target = 'images/' . $image;

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  $like = 75;
  $query = mysqli_query($conn, "INSERT INTO photo VALUES ('" . $target . "', '" . $_POST["caption"] . "', $like)");
}

session_start();

header('Location: profile.php');
