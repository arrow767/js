<?php 
//db 
$adServername = "localhost"; //Server name (Название сервера/адрес хоста)
$adUsername   = "a0239073_monopoly"; // Username(Имя пользователя)
$dbPassword   = "2422662p@";// Пароль
$dbName       = "a0239073_monopoly";//имя базы данных

$conn 		  = mysqli_connect($adServername, $adUsername, $dbPassword, $dbName);

$query = 'SELECT * FROM `Monopoly_cars`';

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($users);
