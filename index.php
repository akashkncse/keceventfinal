<?php
// INDEX.PHP - Main entry point with two vertical sections for redirection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Destination</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body, html {
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
        }
        
        .container {
            display: flex;
            height: 100%;
            width: 100%;
        }
        
        .section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-decoration: none;
            font-size: 3rem;
            font-weight: bold;
            color: white;
            transition: background-color 0.3s ease;
        }
        
        .section:hover {
            opacity: 0.9;
        }
        
        .section-ak {
            background-color: #3498db;
        }
        
        .section-ab {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="ak/index.php" class="section section-ak">AK</a>
        <a href="ab/index.php" class="section section-ab">AB</a>
    </div>
</body>
</html>