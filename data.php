<?php
$name = $_POST['name'];
$year = $_POST['year'];

if (isset($_POST["name"]) && isset($_POST["year"])){
        echo("Hello $name beacause of your birth year $year and color...");
    } else{
        echo ("Try another color");
    }

$Color = $_POST['Color'];
switch ($Color) {
        case "Red":
            echo 'Your car is a NISSAN 240SX';
            break;
        case "Blue":
            echo 'Your car is a NISSAN r34';
            break;
        case "Green":
            echo 'Your car is a NISSAN GTI-R';
            break;
        default: 
            echo 'Try picking picking a color';
            break;

    
}

?>
