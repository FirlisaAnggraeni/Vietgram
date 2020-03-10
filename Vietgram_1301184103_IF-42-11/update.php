<!-- Nama: Firlisa Anggraeni
NIM: 1301184103
Kelas: IF-42-11 -->
<?php
include "koneksi.php";

$query_update = mysqli_query($conn, "UPDATE profile SET username = '" . $_POST["username"] . "', name = '" . $_POST["name"] . "', website = '" . $_POST["website"] . "' , bio = '" . $_POST["bio"] . "' , email = '" . $_POST["email"] . "' , phonenumber = '" . $_POST["phoneNumber"] . "' , gender = '" . $_POST["gender"] . "' ");
$query_user = mysqli_query($conn, "UPDATE user SET username = '" . $_POST["username"] . "', email = '" . $_POST["email"] . "'");

session_start();

$_SESSION["user"]["username"] = $_POST["username"];
$_SESSION["user"]["email"] = $_POST["email"];

$_SESSION["profile"] = $_POST;

header('Location: profile.php');
?>