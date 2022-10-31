<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="style.css">
    <title>Document</title>
</head>
<body>
    <header>Hey world</header>
    <form action="handle.php" method="post">
        <div class="form-input">
            <label>user name </label>
            <input type="text" name="username">
            <!-- <?php
                // echo $_GET['formin'];
                // $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                // // echo $fullurl;
                // if(strpos($fullurl, "formin=empty")){
                //     echo "<br><p> username required </P>";
                // }
                
             ?> -->
        </div>
        <div class="form-input">
            <label>password
            </label>
            <input type="text" name="password">
        </div>
        <div class="form-input">
            <label>email
            </label>
            <input type="text" name="email">

        </div>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<!-- <?php


// if($_SERVER["REQUEST_METHOD"] == "POST" ){
//     // $username = $_REQUEST['username'];
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $email = $_POST['email'];
//     echo $username;
//     echo $password;
//     echo $email;
// }



?> -->