<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAGICK DOLINA</title>
    <!-- Підключення іконок Font Awesome -->
    <script src="https://kit.fontawesome.com/d51fa993a3.js" crossorigin="anonymous"></script>
    <!-- Підключення стилів Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Підключення власних стилів -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Підключення шрифтів з Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <script src="assets/java/script.js"></script>
    <!-- Підключення Lottie для анімацій -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Cinzel Decorative', serif;
            overflow-x: hidden; /* Prevent horizontal scrolling */
            position: relative; /* For absolute positioning of child elements */
        }

        .animation-container {
            position: absolute; /* Positioning absolute to cover the whole area */
            top: 0;
            left: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height to cover the viewport */
            z-index: -1; /* Set z-index to be behind other content */
            overflow: hidden; /* Prevent overflow */
        }

        .animation {
            width: 100%;
            height: auto; /* Allow height to adjust */
        }

        .footer {
            position: fixed; /* Fix the footer at the bottom */
            left: 0;
            bottom: 0;
            width: 100%; /* Full width */
            background-color: rgba(167, 21, 0, 0.8); /* Slightly transparent background color */
            padding: 10px 0; /* Padding for the footer */
            text-align: center; /* Center the text */
            box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1); /* Optional shadow for a better look */
            z-index: 1; /* Ensure the footer is above the animation */
        }

        /* Стилі для анімації */
        .animate-left {
            opacity: 0;
            transform: translateX(-100%);
            transition: opacity 0.2s ease, transform 0.5s ease;
        }

        .animate-right {
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 0.8s ease, transform 1s ease;
        }

        /* Відступ для контенту */
        .content {
            padding-bottom: 60px; /* Додайте достатній відступ для футера */
        }
    </style>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- Контейнер для анімації -->
<div class="animation-container">
    <div class="animation" id="animation"></div>
</div>

<!-- Картинка та опис команди -->
<div class="content"> <!-- Додано клас content для відступу -->
    <div class="row">
        <div class="col-md-4 animate-left">
            <img src="assets/images/wow.png" class="img-fluid" alt="Image">
        </div>
        <div class="col-md-6 animate-right" style="margin-top: 20px; margin-left: 40px;">
            <h2>ВІТАЄМО У СВІТІ MAGICK DOLINA!</h2>
            <p>Магічна долина — це фантастична ММОРПГ, де гравці відкривають для себе таємничий світ стародавніх легенд, магічних істот і містичних сил. У цьому загадковому всесвіті є шість унікальних класів, кожен із яких має свій шлях, здібності та цілі.</p>
            <p>Класи персонажів у Магічній долині:</p>
            <p><img src="assets/images/elixir.png" alt="Пивний Монах" style="width:24px; margin-right:8px;"><span style="color: #da9d13;">Пивний Монах</span>
                Майстер бою в ближньому бою, що володіє стародавніми мистецтвами пивоваріння та бойових технік. Їх напої не лише відновлюють здоров’я, але й здатні тимчасово підвищувати силу, стійкість і навіть імунітет до магії. Пивні монахи вміють п’яно ухилятися від атак, а також наносять нищівні удари кухлем, підсиленим магічними властивостями.</p>

            <p><img src="assets/images/slash.png" alt="Воїн" style="width:24px; margin-right:8px;"><span style="color: #e1133d;">Воїн</span>
                Нескорений захисник і втілення честі. Воїн є першокласним майстром бойових мистецтв і бою з холодною зброєю, захищаючи своїх союзників на полі бою. Його броня та меч просочені магією, а кожна атака підсилюється його люттю та волею. Воїн може кинути виклик навіть найсильнішим істотам, ставлячи їх на коліна своєю нездоланною силою.</p>

            <p><img src="assets/images/bow-and-arrow.png" alt="Мисливець" style="width:24px; margin-right:8px;"><span style="color: #61c487;">Мисливець</span>
                Майстер стрільби з лука та природних пасток. Мисливці діють потайки, зливаючись із природою та використовуючи навички виживання, щоб вистежити здобич або ворога. Вони можуть керувати тваринами, яких приручили, а також створювати токсичні стріли та пастки. Мисливці використовують природну магію для посилення своїх атак і невидимості в темному лісі.</p>

            <p><img src="assets/images/revive.png" alt="Піп" style="width:24px; margin-right:8px;"><span style="color: #ccccc9;">Піп</span>
                Магічний цілитель та захисник. Піпи черпають свою силу з віри, зцілюючи союзників і ослаблюючи ворогів благословеннями та прокляттями. Вони можуть піднімати бойовий дух і навіть створювати магічні щити, що захищають від ворожих атак. Попри свою миролюбність, піпи здатні використовувати бойові молитви, що завдають противникам духовної шкоди.</p>

            <p><img src="assets/images/christmas.png" alt="Травник" style="width:24px; margin-right:8px;"><span style="color: #06be42;">Травник</span>
                Знавець природної магії та зілля. Травники збирають рідкісні рослини та створюють еліксири, здатні лікувати, підвищувати навички або навіть тимчасово надавати надприродні здібності. Вони можуть викликати духів природи та використовувати магічні рослини для захисту. Їхні знання дозволяють лікувати найтяжчі отруєння або наносити нищівні отруйні атаки.</p>

            <p><img src="assets/images/card.png" alt="Антихрист" style="width:24px; margin-right:8px;"><span style="color: #bb1d9c;">Антихрист</span>
                Той, хто обрав темний шлях. Зі своєю магією, він викликає страх на ворогів. Зі своїм темним магічним мистецтвом, Антихрист може створювати жахливі образи і навіть підкоряти волю підлеглих.</p>

            <p>Антихрист — майстер ілюзій і темних ритуалів, здатний викликати страх і навіть підкоряти волю ворогів.</p>

            <p>Особливості гри:
                Чарівний світ з відкритими територіями, таємничими лісами, древніми храмами та підземеллями.
                Унікальні навички для кожного класу та різноманітні шляхи розвитку персонажів.
                Кооперативні та PvP-режими, які дозволяють об'єднувати зусилля або змагатися один проти одного.
                Містичні артефакти та древні заклинання, які відкриваються на вищих рівнях.
                Магічна долина запрошує тих, хто прагне випробувати свою силу та відвагу в епічних битвах і дослідити світ, сповнений стародавніх таємниць та легенд.
            </p>
            <p>Щоб почати гру, потрібно установити гру через лаунчер, який можна знайти у вкладці <a href="launcher.php" class="link">"лаунчер"</a>.</p>
        </div>
    </div>
</div>

<?php include("app/include/footer.php"); ?>
<!-- Підключення скрипта для анімації -->
<script>
    const imgElement = document.querySelector('.animate-left');
    const textElement = document.querySelector('.animate-right');

    window.onload = function() {
        setTimeout(function() {
            imgElement.style.opacity = '1';
            imgElement.style.transform = 'translateX(0)';
            textElement.style.opacity = '1';
            textElement.style.transform = 'translateX(0)';
        }, 500);

        // Ініціалізація анімації Lottie
        const animation = lottie.loadAnimation({
            container: document.getElementById('animation'), // контейнер для анімації
            renderer: 'svg', // рендерер
            loop: true, // зациклювати анімацію
            autoplay: true, // автоматично запускати анімацію
            path: 'assets/java/Animation - 1730055316820.json' // шлях до вашої анімації
        });
    };
</script>

</body>
</html>
