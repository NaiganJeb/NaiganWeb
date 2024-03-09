<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: #1a1a1a;
            flex-direction: column;
        }

        .message-container {
            border: 2px solid #e1c7a4; /* Changed border color */
            padding: 20px;
            font-size: 20px;
            color: #fff;
            margin-bottom: 20px;
            border-radius: 8px; /* Added border-radius for a softer look */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Added box shadow for depth */
        }

        #back-button {
            background-color: #e1c7a4;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Added transition effect */
        }

        #back-button:hover {
            background-color: #8b4513; /* Darker color on hover */
        }
    </style>
</head>
<body>

<div class="message-container">
    <?php
    // Your PHP code to display the message goes here
    echo "You have successfully linked your email.<br>";
    ?>
</div>

<button id="back-button" onclick="goBack()">Back</button>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
