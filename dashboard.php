<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logged In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div class="alert success">You have successfully logged in.</div>
        <a class="btn" href="logout.php">Log Out</a>
    </div>
</body>
</html>
