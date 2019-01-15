<?php 
//db 
<?php 
$adServername = "localhost"; //Server name (Название сервера/адрес хоста)
$adUsername   = "a0239073_monopoly"; // Username(Имя пользователя)
$dbPassword   = "2422662p@";// Пароль
$dbName       = "a0239073_monopoly";//имя базы данных

$conn 		  = mysqli_connect($adServername, $adUsername, $dbPassword, $dbName);


echo 'Processing...';

// Chek for Get variable 
if(isset($_GET['name'])) {
	echo 'GET: Your name is ' . $_GET['name'];
}


// Chek for POST variable 
if(isset($_POST['name'])) {
	echo 'POST: Your name is ' . $_POST['name'];
}