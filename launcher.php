<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d51fa993a3.js" crossorigin="anonymous"></script>

    <title>RoyalRush - Лаунчер</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <script src="assets/java/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Russo One', sans-serif;
            overflow-x: hidden;
            position: relative;
        }

        .animation-container {
            position: absolute; /* Use fixed position to ensure it covers the viewport */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Ensure it stays behind other content */
            overflow: hidden; /* Hide overflow */
        }

        .animation {
            width: 100vw; /* Set width to full viewport width */
            height: 100vh; /* Set height to full viewport height */
            object-fit: cover; /* Ensure the animation covers the entire area */
        }

        .content {
            position: relative;
            z-index: 1; /* Ensure content is above the animation */
            padding: 20px;
            text-align: center;
            color: white; /* Text color for visibility */
        }

        .launcher-image {
            max-width: 100%;
            height: auto;
        }
        <style>
         body {
             margin: 0;
             padding: 0;
             font-family: 'Russo One', sans-serif;
             overflow-x: hidden;
             position: relative;
         }

        .animation-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .animation {
            width: 100%;
            height: auto;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgba(167, 21, 0, 0.8);
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .content {
            padding-bottom: 60px;
        }
    </style>
</head>
<body>

<div class="animation-container">
    <div class="animation" id="animation"></div>
</div>

<?php include("app/include/header.php"); ?>

<div class="container content">
    <img src="assets/images/launcher1.webp" alt="Лаунчер MMORPG Гри" class="launcher-image">
    <h1>Launcher v.1.0</h1>
    <p>Завантажте наш лаунчер, щоб легко почати гру у світі фантастичних пригод! Оберіть відповідну версію для вашої операційної системи та занурюйтеся в епічні битви і захоплюючі квести.</p>

    <div class="button-container">
        <a href="launcher_32bit.exe" class="download-button" download>
            <i class="fa fa-windows" aria-hidden="true"></i> Скачати для 32-біт
        </a>
        <a href="launcher_64bit.exe" class="download-button" download>
            <i class="fa fa-windows" aria-hidden="true"></i> Скачати для 64-біт
        </a>
    </div>
</div>

<!-- Вбудований футер -->
<footer class="footer">
    <div class="container">
        <p class="text-light">© 2024 RoyalRush. Всі права захищено.</p>
    </div>
</footer>

<script>
    const animation = lottie.loadAnimation({
        container: document.getElementById('animation'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'assets/java/Animation - 1730055316820.json'
    });
</script>

</body>
</html>