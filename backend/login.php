<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manidhar_silks";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $username, $hashed_password);
            $stmt->fetch();
            
            if (password_verify($password, $hashed_password)) {
                $_SESSION["user_id"] = $id;
                $_SESSION["username"] = $username;

                // Redirect to the website.html page after successful login
                header("Location: website.html");
                exit(); // Make sure no further code is executed after redirection
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email.";
        }
        
        $stmt->close();
    } else {
        echo "Both email and password are required.";
    }
}
$conn->close();
?>
