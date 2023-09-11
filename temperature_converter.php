<?php

if(isset($_POST['submit']) && isset($_POST['select'])){
    $receivedValue = $_POST['receivedValue'];

    if($_POST['select'] == "faren"){
        // FARENHEIT TO CELSIUS CODE HERE
        $result = ($receivedValue - 32) * 5/9;
        echo "Result: " . $result . " °C";
    } elseif($_POST['select'] == "celci") {
        // CELSIUS TO FARENHEIT CODE HERE
        $result = ($receivedValue * 9/5) + 32;
        echo "Result: " . $result . " °F";
    } else {
        echo "There is a problem in Calculation.";
    }
} else {
    echo "Please Enter A Valid Type First.";
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temparature Converter</title>
</head>

<body>
    <h1>Temparature Converter</h1> <br>
    <form action="temperature_converter.php" method="POST">
        <label for="selectType">Select Type:</label>
        <input type="radio" name="select" value="faren" id="selectType"> FARENHEIT
        <input type="radio" name="select" value="celci" id="selectType"> CELSIUS
        <br><br>
        <label for="enterVal">Enter Value: </label>
        <input type="text" id="enterVal" name="receivedValue" placeholder="Enter A Value"><br><br>
        <input type="submit" name="submit" value="Convert Now">

    </form>



</body>

</html>