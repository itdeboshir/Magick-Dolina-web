<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d51fa993a3.js" crossorigin="anonymous"></script>

    <title>RoyalRush - Новини</title>
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

<div class="container content" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">Новий сезон!!!</h2>
                    <div class="d-flex align-items-start justify-content-between">
                        <img src="assets/images/magic.jpg" class="news-image" alt="news-img">
                        <p class="card-text w-75">Новий неймовірний перший сезон в грі Magick dolina.Сезон U safata добавляє нові землі,неймовірні пригоди та багато нового контенту. Вам відкриються нові регіони для дослідження, які приховують безліч таємниць і викликів. З новими квестами та персонажами ви зможете зануритися в унікальні сюжетні лінії, які розширять ваш ігровий досвід. Підготуйтеся до захоплюючих битв, нових магій та можливостей для покращення ваших персонажів. Не пропустіть цей чудовий шанс стати частиною першого сезону "U Safata" і відкрийте нові горизонти у світі "Magick Dolina"!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title"><a>Новорічний евент</a></h2>
                    <div class="d-flex align-items-start justify-content-between">
                        <img src="assets/images/mage.jpg" class="news-image" alt="news-img">
                        <p class="card-text">
                            Вітаємо вас у зимовій казці "Magick Dolina"! Цього року ми приготували для вас незабутній новорічний евент, який наповнить гру магією та святковим настроєм. Вас чекають унікальні зимові квести з ексклюзивними нагородами, святкові місії з улюбленими персонажами, а також красива декорація світу з сніговими пейзажами та ялинками..</p>
                    </div>
                </div>
            </div>
        </div>
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