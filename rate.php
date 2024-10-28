<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d51fa993a3.js" crossorigin="anonymous"></script>

    <title>Рейтинг</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../site/assets/style.css">
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
        
        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
            text-align: center;
            color: white;
            padding-bottom: 60px;
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

        .team-table th, .team-table td {
            color: white;
            padding: 10px;
        }

        .status-active {
            color: limegreen;
        }

        .status-banned {
            color: red;
        }

        .classes {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

<div class="animation-container">
    <div class="animation" id="animation"></div>
</div>

<?php include("app/include/header.php"); ?>

<div class="container content">
    <div class="description">
        <p>А чи зможеш ти бути на вершині магічної долини?</p>
    </div>
    <div class="team-description">
        <h2>Рейтинг</h2>
        <p>Місце гравця визначається відносно MMR.</p>
    </div>
    <table class="team-table">
        <thead>
        <tr>
            <th>Місце</th>
            <th>Нікнейм</th>
            <th>MMR</th>
            <th>Клас гравця</th>
            <th>Статус акаунта</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'app/database/connect.php';
        $class = array(
            "Voin" => "assets/images/slash.png",
            "Pip" => "assets/images/revive.png",
            "Travnyk" => "assets/images/christmas.png",
            "Monah" => "assets/images/elixir.png",
            "Antyhryst" => "assets/images/card.png",
            "Muslivec" => "assets/images/bow-and-arrow.png",
        );
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT nickname, MMR, class, ban FROM players ORDER BY MMR DESC";
            $stmt = $pdo->query($sql);
            $place = 1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $place . "</td>";
                echo "<td>" . htmlspecialchars($row['nickname']) . "</td>";
                echo "<td>" . htmlspecialchars($row['MMR']) . "</td>";
                echo "<td>" . htmlspecialchars($row['class']) . "</td>";

                $statusClass = $row['ban'] === "no" ? "status-active" : "status-banned";
                $statusText = $row['ban'] === "no" ? "Активний" : "Заблоковано";
                echo "<td class='" . $statusClass . "'>" . $statusText . "</td>";

                if (array_key_exists($row['class'], $class)) {
                    echo "<td><img src='" . htmlspecialchars($class[$row['class']]) . "' class='classes' alt='class icon'></td>";
                } else {
                    echo "<td>Немає класу</td>";
                }

                echo "</tr>";
                $place++;
            }
        } catch (PDOException $e) {
            echo "Помилка: " . $e->getMessage();
        }
        ?>
        </tbody>
    </table>
    <img src="assets/images/rate2.png" class="ctt" alt="ctt">
</div>

<script>
    const animation = lottie.loadAnimation({
        container: document.getElementById('animation'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'assets/java/Animation - 1730055316820.json'
    });
</script>

<?php include("app/include/footer.php"); ?>

</body>
</html>