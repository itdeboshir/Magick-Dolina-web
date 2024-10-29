<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <style>
        body {
            background-image: url('assets/images/succes.webp'); /* Вкажіть шлях до вашого зображення */

            background-position: center; /* Центрує зображення */
            color: #ffffff; /* Задає зелений колір тексту */
            font-size: 20px; /* Збільшує розмір тексту */
            display: flex;
            justify-content: center; /* Вирівнювання по горизонталі */
            align-items: center; /* Вирівнювання по вертикалі */
            min-height: 100vh; /* Мінімальна висота сторінки - весь екран */
            text-align: center; /* Текст по центру */
            flex-direction: column; /* Вирівнювання елементів по вертикалі */
        }

        .btn {
            background-color: #28a745; /* Зелений фон кнопки */
            color: white; /* Білий текст на кнопці */
            padding: 10px 20px; /* Внутрішні відступи кнопки */
            text-decoration: none; /* Видаляє підкреслення у посилання */
            border-radius: 5px; /* Закруглені краї */
            font-size: 18px; /* Збільшений розмір тексту кнопки */
        }

        .btn:hover {
            background-color: #218838; /* Темніший зелений при наведенні */
        }
    </style>
</head>
<body>
<?php
require_once 'app/database/connect.php';

// Перевірка, чи отримані дані від POST запиту
if(isset($_POST['login'], $_POST['email'], $_POST['password'])) {
    // Отримання даних з POST запиту
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Створення підготовленого SQL запиту для вставки даних
        $stmt = $pdo->prepare("INSERT INTO users (login, email, password) VALUES (:login, :email, :password)");

        // Підставлення значень з POST запиту у підготовлений запит
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        // Виконання підготовленого запиту
        $stmt->execute();

        echo "<p>Дані успішно додані до бази даних.</p>";
        echo '<a href="login.php" class="btn">Увійти</a>';
    } catch(PDOException $e) {
        echo "<p>Помилка: " . $e->getMessage() . "</p>";
    }

} else {
    echo "<p>Недостатньо даних для реєстрації користувача.</p>";
}
?>
</body>
</html>
