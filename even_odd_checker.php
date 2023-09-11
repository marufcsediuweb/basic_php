<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['userInput'];
    
    if($userInput % 2 == 0){
        echo "It's Even Number.";
    } else {
        echo "It's Odd Number.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
</head>

<body>
    <h2>Even Odd Checker</h2>
    <form action="even_odd_checker.php" method="POST">
        <label for="uinput">Input A Number:</label>
        <input type="text" name="userInput" id="uinput" placeholder="Enter a number to check" /> <br><br>
        <input type="submit" name="submit" value="Test Now" />
    </form>
</body>

</html>