<?php
$cookie_name = "log_time";
$cookie_value = date("H:i:s");
setcookie($cookie_name, $cookie_value, time() + (60 * 2), "/"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="contain">
        <header>LAB 5</header>
        <main>
            <?php
            if (!isset($_COOKIE[$cookie_name])) {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } else {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
            ?>
        </main>
    </div>
</body>

</html>