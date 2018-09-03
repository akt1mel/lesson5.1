<?php

$testFiles = glob("tests/*.json");

?>


<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Список тестов</title>
</head>
<body>
<h1>Список тестов</h1>

<?php
foreach ($testFiles as $test){
    $testName = str_replace("tests/", "", $test);
    echo $testName;
    echo " <a href='test.php?test=".$testName."'>Перейти к данному тесту</a>";
}
?>


<ul>
    <li><a href="admin.php">Загрузка теста</a></li>
    <li><a href="list.php">Список тестов</a></li>
</ul>

</body>
</html>
