<html>
<header>
    <title>index</title>
</header>
<body>
<form method="post">
    <input name="number" placeholder="Nhập số lượng SNT cần in">
    <button>Print</button>
</form>
<?php
$number = $_POST["number"];
$count = 0;
$i = 2;
if ($number == '') {
    echo "Nhập số lượng cần in";
} elseif ($number <=0){
    echo "Số nhập vào không hợp lệ";
} else {
    while ($count < $number) {
        if (checkSNT($i)) {
            echo $i . " ";
            $count++;
        }
        $i++;
    }
}
function checkSNT($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

?>
</body>
</html>
