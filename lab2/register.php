<form action="<?php echo $_SERVER['SERVER_NAME'];?>">
   
    Name: <input type="text" name="name" required>
    <br><br>
    AGE: <input type="text" name="age" required>
    <br><br>
    Password: <input type="password" name="password" required>
    <br><br>
    address: <input type="text" name="address">
    <br>
    E-mail: <input type="text" name="email">
    <br><br>
    <input type="submit" value="submit">


</form>
<?php 
    function validInput($input){
         $input = trim($input);
         $input = stripslashes($input);
         $input = htmlspecialchars($input);
         return $input;
    }
    $name = $email = $password = $age = "";
    $name_err = $email_err = $password_err = $age_err = "";

    $name = validInput($_POST['name']);
    $pattern = "";
    $email = validInput($_POST['email']);
    $password = validInput($_POST['password']);
    $age = validInput($_POST['age']);

    if(!empty($name)){
        if(preg_match($pattern,$name)){
            
        }

    }else{
        $name_err = $name_err + "name field is required";
    }
    if(preg_match($pattern,$str)){

    }
    else{
    }
?>