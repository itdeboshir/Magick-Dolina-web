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
    <style>
        .status-active {
            color: green;
            font-weight: bold;
        }
        .status-banned {
            color: red;
            font-weight: bold;
        }
    </style>
    <script src="assets/java/script.js"></script>
</head>
<body>
<?php include("app/include/header.php");

require_once 'app/database/connect.php';

// Обробка запиту на блокування/розблокування
if (isset($_POST['action']) && isset($_POST['nickname'])) {
    $nickname = $_POST['nickname'];
    $banStatus = $_POST['action'] === 'block' ? 'yes' : 'no'; // Якщо 'block', то 'yes', інакше 'no'

    // Оновлення статусу в базі даних
    try {
        $stmt = $pdo->prepare("UPDATE players SET ban = :ban WHERE nickname = :nickname");
        $stmt->execute(['ban' => $banStatus, 'nickname' => $nickname]);
        echo "<div class='alert alert-success'>Статус гравця '$nickname' змінено на " . ($banStatus === 'yes' ? 'Заблоковано' : 'Активний') . ".</div>";
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Помилка: " . $e->getMessage() . "</div>";
    }
}

?>
<div class="container">
    <div class="description" style="text-align: center; font-size: 36px;">
        <p>А ЧИ ЗМОЖЕШ ТИ? БУТИ НА ВЕРШИНІ МАГІЧНОЇ ДОЛИНИ!?</p>
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
            <th>Дії</th> <!-- Додано заголовок для кнопок -->
        </tr>
        </thead>
        <tbody>
        <?php
        // Підключення до бази даних
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
            // Запит до бази даних для вибору даних з таблиці players
            $sql = "SELECT nickname, MMR, class, ban FROM players ORDER BY MMR DESC";
            $stmt = $pdo->query($sql);
            $place = 1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $place . "</td>";
                echo "<td>" . $row['nickname'] . "</td>";
                echo "<td>" . $row['MMR'] . "</td>";
                echo "<td>" . $row['class'] . "</td>";

                // Визначення статусу акаунта з кольором
                $statusClass = $row['ban'] === "no" ? "status-active" : "status-banned";
                $statusText = $row['ban'] === "no" ? "Активний" : "Заблоковано";
                echo "<td class='" . $statusClass . "'>" . $statusText . "</td>";

                // Додано кнопки "Заблокувати" / "Розблокувати"
                $actionButton = $row['ban'] === "no" ? 'block' : 'unblock';
                $actionText = $row['ban'] === "no" ? 'Заблокувати' : 'Розблокувати';
                echo "<td>
                        <form action='' method='POST'>
                            <input type='hidden' name='nickname' value='" . htmlspecialchars($row['nickname']) . "'>
                            <input type='hidden' name='action' value='" . $actionButton . "'>
                            <button type='submit' class='btn btn-danger'>$actionText</button>
                        </form>
                      </td>";

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
<?php include("app/include/footer.php"); ?>
</body>
</html>
