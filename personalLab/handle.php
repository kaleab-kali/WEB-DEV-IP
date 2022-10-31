<?php
 $username = $email = $password = "";
 $usernameErr = $emailErr = $passwordErr = "";
 // $username = $_REQUEST['username'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['username'])){
        // header("Location:formdata.php?formin=empty");
        $usernameErr = "username required";
    }
    else{
        $username = validate_input($_POST['username']);
    }
    if(empty($_POST['password'])){
        $usernameErr = "password is required";
    }
    else{
        $password = validate_input($_POST['password']);
    }
    if(empty($_POST['email'])){
        $usernameErr = "email is required";
    }
    else{
        $email = validate_input($_POST['email']);
    }
    echo $username;
    echo $password;
    echo $email;
}


function validate_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>