<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; 
        }

        .form-container {
            width: 400px;
            border: 2px solid #28a745; 
            padding: 5px;
            border-radius: 10px;
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #28a745; 
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            background-color: #28a745;
            color: #fff; 
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
$title = "Sign up";
ob_start();
?>
    <div class="form-container">
        <h2 class="text-success text-center">Sign Up</h2>
        <form id="signupForm" action="index.php?action=store" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
             

            <label for="Phone">Phone</label>
            <input type="Phone" id="Phone" name="Phone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>


            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>


            <button type="submit">Sign Up</button>
        </form>
    </div>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
</body>
</html>