<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.html");
    exit();
}

// Display dashboard content below
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .welcome-message {
            margin-bottom: 20px;
            text-align: center;
        }
        .logout-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Dashboard</h2>
        <div class="welcome-message">
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <p>This is your personalized dashboard.</p>
        </div>
        <div class="logout-link">
            <p><a href="logout.php">Logout</a></p>
        </div>
        <div class="logout-link">
            <p><a href="update.php">Update data</a></p>
        </div>
    </div>
</body>
</html>
