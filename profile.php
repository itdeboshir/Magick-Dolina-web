<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d51fa993a3.js" crossorigin="anonymous"></script>

    <title>Профіль</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../site/assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <script src="assets/java/script.js"></script>
</head>
<body>
<div class="container">
    <?php
    include("app/include/header.php");
    require_once 'app/database/connect.php';

    // Отримання логіну
    $login = $_GET['login'];

    try {
        // Запит до бази даних для вибору даних профілю за логіном
        $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login");
        $stmt->execute(['login' => $login]);
        $user = $stmt->fetch();

        if($user) {
            // Виведення інформації профілю
            echo "<h1>Профіль користувача</h1>";
            echo "<img src='assets/images/default_icon.png' class='img-profile' alt='profile icon'>";

            echo "<p>Назва користувача: {$user['login']}</p>";
            echo "<p>Email: {$user['email']}</p>";
            echo "<p>Дата створення аккаунту: {$user['created']}</p>";
            echo "<p>Клас: Ви ще не почали гру на сервері!</p>";
            // Кнопка "Повідомлення"
        } else {
            echo "Здається антихрист навів на вас мару і ви ввели щось неправильно.";
            echo "<img src='assets/images/loose.webp' class='img-loose' alt='profile loose'>";
        }
    } catch(PDOException $e) {
        echo "Помилка: " . $e->getMessage();
    }
    ?>
</div>
<footer class="footer" id="footer">
    <div class="container">
        <p>contact: MagickDolina@gmail.com ©2024 MD team. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
