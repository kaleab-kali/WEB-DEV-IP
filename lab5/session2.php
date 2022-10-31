<?php
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

        if($_SESSION["role"] == "admin"){
            echo "welcome ADmin";
        }
        else if($_SESSION["role"] == "customer"){
            echo "welcome Customer";
        }
        else{
            echo "error";
        }


        ?>
    </main>
    
</body>
</html>