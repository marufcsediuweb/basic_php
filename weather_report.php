<?php
// Weather Report
$currentTemparature = 19;

// Using If Else If Else
if($currentTemparature >28){
  echo "It's warm.";  
} else if($currentTemparature >=10 && $currentTemparature <= 28) {
    echo "It's cool.";
} else if ($currentTemparature < 10) {
    echo "It's freezing!";
} else {
    echo "Check your input again!";
}


// Using Switch Statement

switch($currentTemparature){
    case ($currentTemparature > 28):
        echo "It's warm.";
        break;
    case ($currentTemparature >=10 && $currentTemparature <= 28):
        echo "It's cool.";
        break;
    case ($currentTemparature < 10):
        echo "It's freezing!";
        break;
    default:
        echo "Check your input again!";
}

?>