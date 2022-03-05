<?php
if(isset($_POST['Color'])){
    $Color = $_POST['Color'];
    switch('Color'){
        case 'Red':
            echo 'Your car is a NISSAN 240SX';
        case 'Blue';
            echo 'Your car is a NISSAN r34';
        case 'Green';
            echo 'Your car is a NISSAN GTI-R';
    }
}

?>
