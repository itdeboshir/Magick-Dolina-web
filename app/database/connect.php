<?php
/*mysql - бд, host - коннект localhost, dbname - наша бд*/
$user = "root";
$password = "mysql";
$host = "localhost";
$db = "site";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]; /*опції*/
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $i) {
    die("Помилка підключення!");
}
