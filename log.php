<?php

// Початок сесії (якщо потрібно)
session_start();

// Підключення до бази даних
require_once 'app/database/connect.php';

// Додавання CSS стилів
echo '<link rel="stylesheet" type="text/css" href="assets/style.css">';

// Перевірка, чи були передані логін і пароль
if (isset($_POST['login'], $_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Перевірка на спеціальний випадок, коли логін і пароль "root"
    if ($login === 'root' && $password === 'root') {
        // Перенаправлення на сторінку admin.php
        header("Location: admin.php");
        exit;
    }

    // Перенаправлення на сторінку профілю з передачею логіну через параметр URL
    header("Location: profile.php?login=$login");
    exit;

    try {
        // Підготовка та виконання SQL-запиту
        $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login");
        $stmt->execute(['login' => $login]);
        $user = $stmt->fetch();

        // Перевірка на правильність логіна і пароля
        if ($user && $password === $user['password']) {
            echo "Ви успішно увійшли до свого профілю!";
            // Кнопка для переходу на сторінку профілю
            echo '<form action="profile.php" method="get">
                      <input type="submit" value="Перейти до профілю">
                  </form>';
        } else {
            echo "Неправильний логін або пароль.";
        }
    } catch (PDOException $e) {
        echo "Помилка: " . $e->getMessage();
    }
} else {
    echo "Недостатньо даних для входу в профіль.";
}
?>
