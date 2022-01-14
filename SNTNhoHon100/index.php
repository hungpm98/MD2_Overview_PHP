<?php
function checkSNT($number){
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "Các số nguyên tố nhỏ hơn 100 là : ";
for ($i=2; $i <= 100; $i ++){
    if (checkSNT($i)){
        echo $i." ";
    }
}