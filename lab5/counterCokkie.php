<?php
$start_time = time();
if (!isset($_COOKIE['visits'])){
    $_COOKIE['visits'] = 0;
} 



$visits = $_COOKIE['visits'] + 1;
setcookie('visits', $visits, time() + 60 * 5);
?>
<html>

<head>
    <title> Title </title>
</head>

<body>
    <?php
    if ($visits > 1) {
        echo ("This is visit number $visits.");
        echo "<br>";
        echo $start_time;
    } else { // First visit
        echo ('Welcome to Lab 5 excersise!');
    }
    ?>
</body>

</html>