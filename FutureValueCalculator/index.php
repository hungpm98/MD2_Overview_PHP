<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="money" placeholder="Money">
    <input type="text" name="interest" placeholder="Interest">
    <input type="text" name="year" placeholder="Year">
    <button>Calculator</button>
</form>
<?php
$money = $_POST["money"];
$interest = $_POST["interest"];
$year = $_POST["year"];
for ($i =1; $i <=$year; $i++){
    $money = $money +$money*$interest;
}
echo $money;
?>
</body>
</html>