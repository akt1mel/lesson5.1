<?php



$testName = $_POST['test-name'];
$test = json_decode(file_get_contents($testName), true);
$result = 0;

foreach ($test as $key => $value) {
    if($value['correct_answer'] == $_POST['answer'.$key]) {
        $result++;
    }
}

$userName = $_POST["userName"];


header("Content-type: image/png");
$im = @imagecreate(600, 400)
or die("Невозможно создать поток изображения");
$background_color = imagecolorallocate($im, 102, 102, 102);
$text_color = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 5, 5, 5,  "Your name: ".$userName." Your result: ".$result , $text_color);
imagepng($im);
imagedestroy($im);