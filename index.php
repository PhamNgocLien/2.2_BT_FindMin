<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Min</title>
</head>
<body>
<form method="POST">
<input type="text" name="numbers" placeholder="Input numbers">
<input type="submit" value="Search">
</form>

<?php
function findMin($numberArr) {
    $min = $numberArr[0];
    $lenght = count($numberArr);
    $index = 0;
    for ($i = 1; $i < $lenght; $i++) {
        if ($numberArr[$i] < $min) {
            $min = $numberArr[$i];
            $index = $i;
        }
    }
    echo 'Gia tri nho nhat la: ' .$min .'(' .$index .')';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numbers = $_POST['numbers'];
    $numberArr = explode(',',$numbers);
    findMin($numberArr);
}
?>
</body>
</html>