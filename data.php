<?php
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
