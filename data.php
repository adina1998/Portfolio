<?php 
$name = $_POST['name'];
$year = $_POST['year'];

if (isset($_POST["name"]) && isset($_POST["year"])){
    if(!empty($_POST["name"]) && !empty($_POST["year"])){
        echo("Hello $name beacause of your birth year ($year) and favorite color from the options provided...");
    } else {
        echo ('Please complete the Form');
    }
}
$Color = $_POST['Color'];
switch ($Color) {
        case "Red":
            echo 'Your Nissan Model is a NISSAN 240SX';
            break;
        case "Blue":
            echo 'Your Nissan Model is a NISSAN R34';
            break;
        case "Green":
            echo 'Your Nissan Model is a NISSAN GTI-R';
            break;
    
}
?>
