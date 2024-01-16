<?php
// Démarrez la session
session_start();

// Détruisez toutes les variables de session
$_SESSION = array();

// Détruisez la session
session_destroy();

// Redirigez l'utilisateur vers la page de connexion
header("Location: page.php");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
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

        .logout-container {
            text-align: center;
        }

        button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2 class="text-danger">Log Out</h2>
        <form id="logoutForm" action="/logout" method="post">
            <!-- pour la déconnexion -->
            <button type="submit">Log Out</button>
        </form>
    </div>
    <!-- Les scripts Bootstrap doivent être inclus de la manière suivante -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
