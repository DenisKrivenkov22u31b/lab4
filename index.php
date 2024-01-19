<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Статус стипендии</title>
</head>

<body>

    <div>
        <h2>Результаты экзаменов</h2>
        <form action="check_stipend.php" method="post">
            <label for="exam1">Экзамен 1:</label>
            <input type="text" id="exam1" name="exam1" placeholder="Введите оценку">

            <label for="exam2">Экзамен 2:</label>
            <input type="text" id="exam2" name="exam2" placeholder="Введите оценку">

            <button type="submit">Проверить стипендию</button>
        </form>
    </div>

</body>

</html>
