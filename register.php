<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) 
    {
        echo "Registration successful. <a href='login.html'>Login here</a>";
    } else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>