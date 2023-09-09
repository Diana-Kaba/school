<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Школа</title>
</head>
<body>
    <h2>3.5 Школа</h2>
    <?php
$n = rand(1, 13);
echo "\n <p>$n клас</p> \n";

switch ($n) {
    case 1:
        echo "\n <p>Вчимо літери.</p> \n";
        break;
    case 2:
        echo "\n <p>Вчимо таблицю множення.</p> \n";
        break;
    case 3:
        echo "\n <p>Вчимось писати!</p> \n";
        break;
    case 4:
        echo "\n <p>Вчимо частини мови.</p> \n";
        break;
    case 5:
        echo "\n <p>Починаємо історію.</p> \n";
        break;
    case 6:
        echo "\n <p>Математика - це алгебра та геометрія!</p> \n";
        break;
    case 7:
        echo "\n <p>Що таке хімія?</p> \n";
        break;
    case 8:
        echo "\n <p>Що таке фізика?</p> \n";
        break;
    case 9:
        echo "\n <p>Підготовка до ДПА!</p> \n";
        break;
    case 10:
        echo "\n <p>Що таке астрономія?</p> \n";
        break;
    case 11:
        echo "\n <p>Підготовка до ЗНО!</p> \n";
        break;
    case 12:
        echo "\n <p>Майже всі вивчили!</p> \n";
        break;
    default:
        echo "\n <p>Такого класу ми не маємо!</p> \n";
}
?>
</body>
</html>