<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstOperand = $_POST["first-operand"];
    $operator = $_POST["operator"];
    $secondOperator = $_POST["second-operand"];
}
echo "<h1> Result :</h1>";

try {
    if ($secondOperator !=0){
        switch ($operator){
            case "Addition":
                echo $firstOperand." + ".$secondOperator." = ". ($firstOperand + $secondOperator);
                break;
            case "Subtraction":
                echo $firstOperand." - ".$secondOperator." = ". ($firstOperand - $secondOperator);
                break;
            case "Multiplication":
                echo $firstOperand." * ".$secondOperator." = ". $firstOperand * $secondOperator;
                break;
            case "Division":
                echo $firstOperand." / ".$secondOperator." = ". $firstOperand / $secondOperator;
        }
    } else{
        throw new Exception('Second operator != 0');
    }
}
catch (Exception $exception){
    echo "Message: " . $exception->getMessage();
}

