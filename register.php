<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d51fa993a3.js" crossorigin="anonymous"></script>

    <title>Реєстрація</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <script src="assets/java/script.js"></script>
</head>
<body>

<?php include("app/include/header.php");
  require_once 'app/database/connect.php';
?>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <h2 class="auth">Реєстрація</h2>
            <p class="registration-info">Заповніть поля відповідними даними:</p>
            <form action="reg.php" method="post">
                <label for="login" class="log_text">Логін:</label>
                <input type="text" id="login" name="login" required>
                <label for="email" class="log_text">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password" class="log_text">Пароль:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Зареєструватись">
            </form>
            <p class="reg_info">Якщо ви вже бували в наших краях (маєте аккаунт), <a href="login.php" class="link">увійдіть</a>.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
