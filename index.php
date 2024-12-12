<?php
session_start();


if (isset($_SESSION['user_id'])) {
 
    header("Location: pages/create.php");
    exit();
} else {
   
    header("Location: pages/register.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .message-box {
            text-align: center;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .message-box h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .message-box p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #4CAF50;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Redirecting...</h1>
        <p>Please wait while we redirect you to the appropriate page.</p>
        <div class="loader"></div>
    </div>
</body>
</html>
