<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input name="usd" placeholder="inputUSD">
    <button>Convert</button><br><br>
</form>
<?php
$usd = $_POST["usd"];
$exchangeRate =23000;
if($usd==""){
    echo "Nhập số cần đổi";
}else{
    echo $usd." USD = ". $usd*$exchangeRate." VND";
}
?>
</body>
</html>