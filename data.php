<?php
if(isset($_POST['Color'])){
    $Color = $_POST['Color'];
    switch('Color'){
        case 'Red':
            echo 'Your car is a NISSAN 240SX<br/>';
            break;
        case 'Blue':
            echo 'Your car is a NISSAN r34<br/>';
            break;
        case 'Green':
            echo 'Your car is a NISSAN GTI-R<br/>';
            break;

    }
}

?>
