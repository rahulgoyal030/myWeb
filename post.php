<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['textArea'])) {
    $textdesc = $_POST['textArea'];
}

$sql = "INSERT INTO `news`(`id`, `name`, `post`, `date`) VALUES (NULL,'$_SESSION[sesName]','$textdesc','12 june')";
mysqli_query($conn, $sql);

header('Location: /myWeb/news.php'); 



mysqli_close($conn);
?>