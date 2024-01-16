<?php
$servename = "localhost";
$username = "root";
$password = ""; 
$dbname = "clinic";

try {
    $conn = new PDO("mysql:host=$servename;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "La connexion a été bien établie";
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}

if (isset($_POST['sign_in'])) {
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Utilisez password_hash pour sécuriser le mot de passe


    $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES (:username, :email, :password)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password); 
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form-container {
            background-color: orange;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            width: 400px;
            margin: auto;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            color: black; 
        }

        button {
            background-color: #1e73c4;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #d7d8c5;
        }
    </style>
</head>
</head>
<body>

<div class="form-container bg-light">
    <h2>Sign In</h2>
    <form method="POST" action="">
    <label for="username"><b>Username:</b></label>
            <input type="text" id="username" name="username" required>

            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email" required>

            <label for="password"><b>Password :</b></label>
            <input type="password" id="password" name="password" required>
            
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                  <b> Remember me </b>
                </label>
              

                <div class="col-auto mx-auto">
                    <button type="submit">Sign in</button>
                </div>
                
                
        </form>
    </div>

</body>
</html>
