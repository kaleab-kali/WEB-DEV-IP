<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = mysqli_query($con, "select ID from gts_users where Email='$email' && Password='$password' ");
    $ret = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);
    if ($ret == 1) {
        $_SESSION['detsuid'] = array(
            'Email' => $ret['email'],
            'Password' => $ret['password'],
            'UserType' => $ret['role']
        );

        $role = $_SESSION['detsuid']['ID'];
        switch ($role) {
            case 'System User':
                header('location: dashboard.php');
                break;
            case 'Administrator':
                header('location: admin/index.html');
                break;
        }
    } else {
        echo "<script type='text/javascript'>
    alert('Wrong email and password combination');
</script>";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        login session lesson <br><br>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for=""> ID
                <input type="text">
            </label> <br>
            <label for="">password
                <input type="password">
            </label><br>

            <input type="submit" value="submit">

        </form>
    </main>
</body>

</html>