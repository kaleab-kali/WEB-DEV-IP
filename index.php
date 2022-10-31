<?php
    for($i = 5; $i <= 15 ; $i++ ){
        echo " $i <br/>";
    }
    echo "hello world";

    $i2 = 5;
    while($i2 < 15){
        echo " $i2 <br/>";
        $i2++;

    }
    $i3 = 5;
    do {
        echo " $i3 <br/>";
        $i3++;

    }while($i3 < 15);

    $_grade = 75;
    if($_grade > 80){
        echo "you got A";
    }
    else if($_grade > 70){
        echo "you got B";
    }
    else if($_grade > 60){
        echo "you got C";
    }
    else if($_grade > 50){
        echo "you got D";

    }
    else {
        echo "you failed";
    }
    echo "<br/>";

    $_students = array("chala", "kebede", "tekele");

    foreach($_students as $name ){
        echo "$name <br/>";
    }
    echo "<br/>";


    $_valueGrade = array("excellent" => "A", "very good" => "B" , "good" => "C");
    foreach($_valueGrade as $icon => $val){
        echo "$icon == $val  <br>";
    }

    echo "<br/>";

    $_traverse = "A";
    switch($_traverse){
        case "A": {
            echo "EXCELLENT";
            break;
        }
        case "B": {
            echo "Very Good";
            break;
        }
        case "C": {
            echo "Good";
            break;
        }
        case "D": {
            echo "fair";
            break;
        }
        default: {
            echo "you failed";        }
        
    }

    echo "<br>";
    $linkedn = "https://linkedn.com";

    echo "<a href='$linkedn'>linkedn</a>";




?>