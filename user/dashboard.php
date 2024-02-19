<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['nis']) || !isset($_SESSION['status']) || $_SESSION['status'] !== 'login') {
    header("location: ../user.php");
    exit();
}

include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
            color: #666;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            display: inline-block;
            padding: 8px 16px;
            border-radius: 5px;
            background-color: #f0f0f0;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Selamat datang di Dashboard</h1>

        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
