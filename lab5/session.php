<?php
// session_name("role");
session_start();

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
    <header> LAB 5 </header>
    <main>
        <?php
            // echo $_SESSION["role"];
            // Set session variables
        $_SESSION["role"] = "customer";
        echo "Session variable is set.";
        ?>
    </main>
</body>
</html>