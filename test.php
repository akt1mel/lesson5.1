<?php

if (!file_exists('tests/'.$_GET['test'])) {
    header('HTTP/1.0 404 Not Found');
    exit;
}

$testName = "tests/".$_GET['test'];
$test = json_decode(file_get_contents($testName), true);
$result = 0;


?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Список тестов</title>
</head>
<body>
<h1>Тест</h1>


<form action="certificate.php" method="POST">
  <input type="hidden" name="test-name" value="<?=$testName;?>">
  <p><b>Ваше имя:</b><br>
   <input type="text" name="userName">
  </p>
    <?php foreach ($test as $key => $value) {
        echo "<fieldset id=''>";
            echo "<legend>".$value["question"]."</legend>";
            $i = 0;
            foreach ($value["answers"] as $answer) {
                echo "<label><input type='radio' name='answer".$key."' value='".$i++."' required>".$answer."</label>";
            }
        echo "</fieldset>";
    } ?>
    <input type="submit" value="Отправить" name="submit">

</form>


<ul>
    <li><a href="admin.php">Загрузка теста</a></li>
    <li><a href="list.php">Список тестов</a></li>
</ul>

</body>
</html>
