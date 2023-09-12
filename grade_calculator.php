<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // Receive form data and assign to variables
        $subjectOne = $_POST['numOne'];
        $subjectTwo = $_POST['numTwo'];
        $subjectThree = $_POST['numThreee'];

        $calculation = ($subjectOne + $subjectTwo + $subjectThree) / 3;
        // Checking the average value with following grading system

        if($calculation < 0 || $calculation > 100) {
            echo "Please enter value between 0 to 100 to get the result.";
        } else {
            if($calculation <= 100 && $calculation >=70){
                echo "Congrats! You got A.";
            } else if($calculation <= 69 && $calculation >=55){
                echo "Good! You got B.";
            } else if($calculation <= 54 && $calculation >=45){
                echo "OK! You got C.";
            } else if($calculation <= 44 && $calculation >=40){
                echo "You Need To Study More! You got D.";
            } else if($calculation <= 39 && $calculation >=0){
                echo "You Got F but Don't Lose Hope! Study Hard!";
            } else {
                echo "";
            }
        }
} 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>

<body>
    <h2>Grade Calculator</h2>
    <form action="grade_calculator.php" method="POST">
        <p style="font-size: 10px;">Note: Please enter your marks here (0 to 100).</p>
        <label for="numOne">Subject One Score: </label>
        <input type="text" name="numOne" id="numOne" placeholder="Subject One Score" required /><br><br>

        <label for="numTwo">Subject Two Score: </label>
        <input type="text" name="numTwo" id="numTwo" placeholder="Subject Two Score" required /><br><br>

        <label for="numThreee">Subject Three Score: </label>
        <input type="text" name="numThreee" id="numThreee" placeholder="Subject Three Score" required /><br><br>

        <input type="submit" name="submit" value="Calculate Grade" />
    </form>


</body>

</html>