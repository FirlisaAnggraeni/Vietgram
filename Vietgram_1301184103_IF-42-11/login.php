<!-- Nama: Firlisa Anggraeni
NIM: 1301184103
Kelas: IF-42-11 -->
<?php
include "koneksi.php";
$query_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'");
$user = mysqli_fetch_assoc($query_user);
$query_profile = mysqli_query($conn, "SELECT * FROM profile WHERE username = '" . $user["username"] . "'");
$profile = mysqli_fetch_assoc($query_profile);

session_start();

if (count($user) > 0) {
	$_SESSION["user"] = $user;
	$_SESSION["profile"] = $profile;
	header('Location: feed.php');
} else {
	header('Location: index.php');
}
