<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form action="calculator.php" method="post" style="width: 350px">
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>First operand:</td>
                <td><input type="text" name="first-operand"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td><select name="operator">
                        <option>Addition</option>
                        <option>Subtraction</option>
                        <option>Multiplication</option>
                        <option>Division</option>
                    </select></td>
            </tr>
            <tr>
                <td>Second operand: </td>
                <td><input type="text" name="second-operand"></td>
            </tr>
            <tr>
                <td></td>
                <td><button>Calculator</button></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>