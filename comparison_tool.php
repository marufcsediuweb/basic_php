<?php
$result = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $numOne = $_POST['numOne'];
    $numTwo = $_POST['numTwo'];
/*
    // Tried If, Else if, Else to set the logic first before converting it to Ternary
    
    if($numOne > $numTwo) {
        echo "Number One is the Large Number.";
    } else if($numOne == $numTwo) {
        echo "Both are same.";
    } else {
        echo "Number Two is the Large Number.";
    }

*/
    // Ternary Operator
    
    $result = $numOne > $numTwo ? "Number One is the Large Number." : ($numOne == $numTwo ? "Both are same." : "Number Two is the Large Number.");
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>

<body>

    <h2>Compare 2 Numbers</h2>

    <form action="comparison_tool.php" method="POST">
        <label for="num1">Enter Number 01:</label>
        <input type="text" name="numOne" id="num1" placeholder="Enter Number 01" /> <br /><br />
        <label for="num2">Enter Number 02:</label>
        <input type="text" name="numTwo" id="num2" placeholder="Enter Number 02" /> <br /><br />
        <input type="submit" name="submit" value="Check Result" />
    </form>

    <p><?php echo $result; ?></p>

</body>

</html>