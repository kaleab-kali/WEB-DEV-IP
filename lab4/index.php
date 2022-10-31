<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>IP</header>
    </div>
    
</body>
</html>

<?php

require "connection.php";

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(25),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
$pass = "kadd4568";
$encrypt_pass = md5($pass);

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// $sql = "INSERT INTO MyGuests (firstname, lastname, email,password)
// VALUES ('John', 'Doe', 'john@example.com', '$encrypt_pass')";

// if ($conn->query($sql) === true) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email,password)
// VALUES ('John', 'Doe', 'john@example.com','$encrypt_pass')";

// if ($conn->query($sql) === TRUE) {
//   $last_id = $conn->insert_id;
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $pass1 = "kajdejla";
// $encrypt_pass1 = md5($pass1);
// $sqll = "INSERT INTO MyGuests (firstname, lastname, email,password)
// VALUES ('John', 'Doe', 'john@example.com','$encrypt_pass1' );";
// $sqll .= "INSERT INTO MyGuests (firstname, lastname, email,password)
// VALUES ('Mary', 'Moe', 'mary@example.com','$encrypt_pass1');";
// $sqll .= "INSERT INTO MyGuests (firstname, lastname, email,password)
// VALUES ('Julie', 'Dooley', 'julie@example.com','$encrypt_pass1')";

// if (mysqli_multi_query($conn, $sqll)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// $sql = "DELETE FROM MyGuests WHERE id=3";

// if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }

// $sql = "UPDATE MyGuests SET lastname='bekele' WHERE id=4";

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

// $collectInput = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
// $collectInput->bind_param("ssss", $firstname, $lastname, $email, $passw);

// // set parameters and execute
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $passw = "abscd";
// $collectInput->execute();

// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $passw = "abscada5d6d";
// $collectInput->execute();

// $firstname = "Julie";
// $lastname = "Dooley";
// $email = "julie@example.com";
// $passw = "abs546886cd";
// $collectInput->execute();

// echo "New records created successfully";

// $collectInput->close();
mysqli_close($conn);


?>
