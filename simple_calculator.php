<?php
// Checking the Form request method Get/Post
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $numOne = $_POST['numOne'];
    $numTwo = $_POST['numTwo'];
    $operationType = $_POST['operationType'];

    if($operationType == "addi"){
        $result = $numOne + $numTwo;
        echo "Output: " . $result;
    } else if($operationType == "subt"){
        $result = $numOne - $numTwo;
        echo "Output: " . $result;
    } else if($operationType == "mult"){
        $result = $numOne * $numTwo;
        echo "Output: " . $result;
    } else if($operationType == "divi"){
        $result = $numOne / $numTwo;
        echo "Output: " . $result;
    } else {
        echo "Operation not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP calculator</title>
</head>

<body>
    <h1>PHP Calculator</h1>
    <form action="simple_calculator.php" method="POST">
        <label for="numOne">1st Number: </label>
        <input type="number" name="numOne" required id="numOne" placeholder="Enter 1st Number" /> <br /><br />
        <label for="numTwo">2nd Number: </label>
        <input type="number" name="numTwo" required id="numTwo" placeholder="Enter 2nd Number" /> <br /><br />
        <label for="operationType">Select Operation Type: </label>
        <select name="operationType" id="operationType">
            <option value="addi">Addition</option>
            <option value="subt">Subtraction</option>
            <option value="mult">Multiplication</option>
            <option value="divi">Division</option>
        </select><br /><br />

        <input type="submit" name="submit" value="Execute Operation" />
    </form>

</body>

</html>