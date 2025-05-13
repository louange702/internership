<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "products"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['UserName']) && isset($_POST['Password'])) {
        $UserName = $_POST['UserName']; 
        $Password = $_POST['Password']; 

     
        
        $sql = "SELECT * FROM login WHERE UserName = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $UserName); 
            $stmt->execute();
            $result = $stmt->get_result();
            
          
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                $stored_password = $user['Password']; 

               
                if (password_verify($Password, $stored_password)) {
                   
                    session_start();
                    $_SESSION['UserName'] = $UserName;
                    $_SESSION['UserId'] = $user['UserId']; 
                    
                    
                    header("Location: home.php");  
                    exit();
                } else {
                 
                    echo "Incorrect password.";
                }
            } else {
             
                echo "No user found with that username.";
            }

         
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        
        echo "Please fill in both username and password.";
    }
}

$conn->close();
?>
