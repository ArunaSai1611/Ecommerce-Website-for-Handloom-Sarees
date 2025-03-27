<?php
// Database connection
$handler = new mysqli("localhost", "root", "", "test");

// Check connection
if ($handler->connect_error) {
    die("Connection failed: " . $handler->connect_error);
}

// Retrieve form data securely
$name = trim($_POST["uname"]);
$email = trim($_POST["mail"]);
$number = trim($_POST["number"]);
$address = trim($_POST["address"]);
$productname = trim($_POST["product_name"]);

// Basic validation
if (empty($name) || empty($email) || empty($number) || empty($address)|| empty($productname)) {
    die("All fields are required.");
}

// Insert query with prepared statements
$query = "INSERT INTO customer_Details (name, email, phone, address,product_name) VALUES (?, ?, ?, ?,?)";
$stmt = $handler->prepare($query);
if ($stmt) {
    $stmt->bind_param("sssss", $name, $email, $number, $address,$productname);
    if ($stmt->execute()) {
        echo "<h2 style='color:green;'>Thank you for your order!</h2>";
    } else {
        echo "<h2 style='color:red;'>Error: " . $stmt->error . "</h2>";
    }
    $stmt->close();
} else {
    echo "<h2 style='color:red;'>Failed to prepare statement.</h2>";
}

// Close database connection
$handler->close();
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: radial-gradient(#ffffff,#ffd6d6);">
    <center>
        <div class="col text-success">
            <h1>Thanks for ordering</h1>
            <img src="thankyou.jpg" alt="Thank You" width="200">
        </div>
    </center>
</body>
</html>
