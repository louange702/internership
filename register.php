<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = ""; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $userId = $_POST['userId'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO users (userId, username, password) VALUES (?, ?, ?)";


    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("iss", $userId, $username, $hashed_password); 

    
        if ($stmt->execute()) {
            echo "New record created successfully!";
          
            header("Location: lgn.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    
    $stmt->close();
}


$conn->close();
?>

