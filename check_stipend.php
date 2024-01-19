<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем оценки из формы
    $exam1 = isset($_POST['exam1']) ? $_POST['exam1'] : '';
    $exam2 = isset($_POST['exam2']) ? $_POST['exam2'] : '';

    // Проверяем, будет ли начислена стипендия
    $stipendStatus = checkStipend($exam1, $exam2);

    // Выводим результат
    echo "Статус стипендии: $stipendStatus";
}

function checkStipend($exam1, $exam2)
{
    // Определение условий для начисления стипендии
    $passGrade = ['хорошо', 'отлично'];

    // Проверка, все ли экзамены сданы на "хорошо" или "отлично"
    if (in_array(mb_strtolower($exam1), $passGrade) && in_array(mb_strtolower($exam2), $passGrade)) {
        return "Студенту будет начислена стипендия";
    } else {
        return "Студенту стипендия не будет начислена";
    }
}
?>
