<?php 
function compute($var){
    $var > 100 ? "GOLD":($var > 60? "Silver": ($var > 30? "BRONZE": ($var <= 30? "Follower": "exit")));
}

echo "hey";
?>