<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="get">
    <p>Nhập số cần đọc : </p>
    <input type="text" name="number">
    <button>Read</button>
    <br>
    <br>
</form>
<?php
$number = $_GET['number'];
if ($number !== "") {
    readNumber($number);
} else {
    echo "Hãy nhập số vào";
}

function readNumber($number)
{
    if ($number >= 0 && $number < 10) {
        echo oneDigit($number);
    } else if ($number < 100) {
        echo twoDigit($number);
    } else if ($number < 1000) {
        echo threeDigit($number);
    } else {
        echo "Số này chưa được học";
    }
}

function oneDigit($number)
{
    $oneNumber = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
    return $oneNumber[$number];
}

function twoDigit($number)
{
    $teen = [10 => "Ten", 11 => "Eleven", 12 => "Twelve", 13 => "Thirteen", 14 => "Fourteen", 15 => "Fifteen", 16 => "Sixteen",
        17 => "Seventeen", 18 => "Eighteen", 19 => "Nineteen"];
    $ty = [2 => "Twenty", 3 => "Thirty", 4 => "Forty", 5 => "Fifty", 6 => "Sixty", 7 => "Seventy", 8 => "Eighty", 9 => "Ninety"];
    if ($number < 20) {
        return $teen[$number];
    } else if ($number % 10 == 0) {
        return $ty[$number[0]];
    } else {
        return $ty[$number[0]] . " " . oneDigit($number[1]);
    }
}

function threeDigit($number)
{
    if ($number % 100 == 0) {
        return oneDigit($number[0]) . " hundred";
    } else if ($number[1] == 0) {
        return oneDigit($number[0]) . " hundred and " . oneDigit($number[2]);
    } else {
        return oneDigit($number[0]) . " hundred " . twoDigit($number[1] . $number[2]);
    }
}

?>
</body>
</html>